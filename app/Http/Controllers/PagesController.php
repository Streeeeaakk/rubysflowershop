<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\ProfilePicture;
use App\Models\Product;
use DB;
use App\Models\UserAddress;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    public function registration()
    {
        return view('pages.signup');
    }
    
    public function index()
    {
        return view('pages.login');
    }

    public function dashboard()
    {
        
        if(Auth::check()){
            
            $product = DB::select('select * from product');
            return view('pages.dashboard', ['product' => $product]);
        }else{
  
        return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function pendingOrders()
    {
        if(Auth::check()){
            $user_ID = Auth::User()->user_ID;
            $unique_tmp_cart_rand = DB::select('SELECT tmp_cart_rand FROM user_order WHERE user_ID = '.$user_ID);
            $tmp_cart_rand = DB::select('SELECT tmp_cart_rand FROM tmp_cart WHERE user_ID = '.$user_ID);
            //dd($unique_tmp_cart_rand);
            $order_data = array();
            
            foreach($unique_tmp_cart_rand as $tmp_cart_rand){
                $order_data = DB::select('SELECT 
                tmp_cart.tmp_cart_rand, tmp_cart.prod_quantity, tmp_cart.user_ID, 
                product.prod_ID, product.prod_picture, product.prod_name, product.prod_price, 
                user_order.order_payment_method
                FROM product, user_order, tmp_cart
                WHERE product.prod_ID = tmp_cart.prod_ID and user_order.user_ID = '. $user_ID .' and 
                user_order.tmp_cart_rand = '. $tmp_cart_rand->tmp_cart_rand .' and tmp_cart.tmp_cart_rand = '. $tmp_cart_rand->tmp_cart_rand .'
                and tmp_cart.user_ID = '.$user_ID);
            }

            dd($order_data);

            return view('pages.pendingOrders');
        }else{
  
        return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function aboutUs()
    {
        if(Auth::check()){
           
            return view('pages.aboutUs');
        }else{
  
        return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function profile()
    {
        if(Auth::check()){
            $user_ID = Auth::User()->user_ID;
            $address = DB::select('select * from user_address where user_id = '.$user_ID);
            $profilepicture = DB::select('select * from profilepicture where user_id = '.$user_ID);

            $profilepicturecount = ProfilePicture::query()->where('user_ID', $user_ID)->get()->count();

            return view('pages.profile', ['address' => $address], ['profilepicture' => $profilepicture], ['profilepicturecount' => $profilepicturecount]);
        }else{
  
        return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function addAddress()
    {
        if(Auth::check()){
            return view('pages.addAddress');
        }else{
  
        return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function cart()
    {
        if(Auth::check()){
            $user_ID = Auth::User()->user_ID;
            $cart = DB::select('select product.prod_name, 
            product.prod_category, 
            product.prod_price, 
            product.prod_picture, product.prod_ID, 
            cart.prod_quantity, cart.cart_ID, 
            cart.user_ID from product, cart 
            where product.prod_ID = cart.prod_ID 
            and cart.user_ID = '.$user_ID);
        
            return view('pages.cart', ['carts' => $cart]);
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function product()
    {
        if(Auth::check()){
            if(Auth::User()->user_level == 0){
            $product = DB::select('select * from product');

                return view('pages.product', ['product' => $product]);
            }
            else{
                return redirect("login")->withSuccess('You are not allowed to access');
            }
           
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function addtocart_quantity(Request $request)
    {
        if(Auth::check()){
            $prod_ID = $request->prod_ID;
            return view('pages.addtocart_quantity', ['prod_ID' => $prod_ID]);
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function editQuantity(Request $request)
    {
        if(Auth::check()){
            $prod_ID = $request->cart_ID;
            return view('pages.editquantity', ['prod_ID' => $prod_ID]);
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }
    
    public function transaction(Request $request)
    {

        if(Auth::check()){
            
            if($request->has('product')){
                $prod = $request->product;
                $product_from_cart = array();
                $product_from_product = array();
                $user_ID = Auth::User()->user_ID;
                $address = DB::select('select * from user_address where user_id = '.$user_ID);
           

                foreach($prod as $prod){
                    $product_from_cart[] = DB::select('select product.*, cart.prod_quantity, cart.user_ID, cart.prod_ID, cart.cart_ID from product, cart where product.prod_ID = '.$prod.' and cart.prod_ID = '.$prod.' and cart.user_ID = '.Auth::User()->user_ID);

                    //$product_from_product[] = DB::select('select * from product where prod_ID = '.$prod);
                }
                return view('pages.transaction', ['product_from_product' => $product_from_cart], ['address' => $address]);
             }
             
             else{
                return redirect("cart")->with('fail','You did not select any products');
                }

        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function sales(){
        if(Auth::check()){
            if(Auth::User()->user_level == 0){
                $sales = DB::select('
                select tmp_cart.tmp_cart_ID, tmp_cart.prod_quantity, tmp_cart.prod_ID, 
                user_order.created_at, product.prod_name, product.prod_price 
                from tmp_cart, user_order, product 
                where user_order.tmp_cart_rand = tmp_cart.tmp_cart_rand and tmp_cart.prod_ID = product.prod_ID');

                return view('pages.sales', ['sales' => $sales]);
            }
            else{
                return redirect("login")->withSuccess('You are not allowed to access');
            }
        }
        else{   
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function salesReport(Request $request){
        if(Auth::check()){
            if(Auth::User()->user_level == 0){
                $hhmmss = " 00:00:00";
                $hhmmss2 = " 23:59:59";
                $from = $request->fromDate;
                $tod = $request->toDate;
                
                $fromDate = $from . $hhmmss;
                $toDate = $tod . $hhmmss2;

                $fromToTo = $from . " to " . $tod;
                
                
                $sales = DB::select('select tmp_cart.tmp_cart_ID, tmp_cart.prod_quantity, tmp_cart.prod_ID, 
                user_order.created_at, product.prod_name, product.prod_price 
                from tmp_cart, user_order, product 
                where user_order.tmp_cart_rand = tmp_cart.tmp_cart_rand and tmp_cart.prod_ID = product.prod_ID'
                .' and user_order.created_at between "'.$fromDate.'" and "'.$toDate.'"');

                return view('pages.salesReport', ['sales' => $sales], ['fromToTo' => $fromToTo]);
            }
            else{
                return redirect("login")->withSuccess('You are not allowed to access');
            }
        }
        else{   
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

}

