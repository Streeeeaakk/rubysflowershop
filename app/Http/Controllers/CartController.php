<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Cart;
use App\Models\UserOrder;
use App\Models\OrderQueue;
use DB;
use Illuminate\Support\Facedes\Storage;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addtocart(Request $request){
        $request->validate([
            'user_ID' => 'required',
            'prod_ID' => 'required',
            'prod_quantity' => 'required',
        ]);


        if(DB::table('cart')->where([['prod_ID', $request->prod_ID],['user_ID', $request->user_ID],])->exists())
        {
            echo "Product is already in cart! <p>Redirecting in 3 seconds...";
            echo '<meta http-equiv="refresh" content="3;url=dashboard" />';
        }
        else{
            if($request->prod_quantity > 0){
                $cart = new Cart();
                $cart->user_ID = $request->user_ID;
                $cart->prod_ID = $request->prod_ID;
                $cart->prod_quantity = $request->prod_quantity;
                $cart->save();

                return redirect("dashboard")
                    ->with('success', 'Successfully added to cart');
            }
            else{
                echo "Quantity cannot be 0! <p>Redirecting in 3 seconds...";
                echo '<meta http-equiv="refresh" content="3;url=dashboard" />';
            }
        }
    }

    public function deleteFromCart(Request $request){
        DB::delete('DELETE FROM cart where cart_ID = '.$request->cart_ID);
        echo "Product is removed in cart! <p>Redirecting in 3 seconds...";
        echo '<meta http-equiv="refresh" content="3;url=dashboard" />';
        return redirect("cart");
    }

    public function edit_quantity(Request $request){
        $cart_ID = $request->cart_ID;
        $prod_quantity = $request->prod_quantity;

        if($prod_quantity == 0){
            return redirect("cart")->with('success', 'Quantity Cannot be 0');
        }else{
            $item = Cart::find($cart_ID);
            $item->prod_quantity = $prod_quantity;
            $item->save();
            
            echo "Quantity is updated! <p>Redirecting in 3 seconds...";
            echo '<meta http-equiv="refresh" content="3;url=cart" />';
            return redirect("cart");
        }


    }

    public function addToTmpCart(Request $request){
        $cart_ID = $request->cart_ID;
        $prod_ID = $request->prod_ID;
        $prod_quantity = $request->prod_quantity;
        $user_ID = $request->user_ID;
        $tmp_cart_rand = $request->tmp_cart_rand;

        $cart_ID_count = count($cart_ID);

        $address = $request->address;
        $payment = $request->payment;

        $user_order = new UserOrder();
        $user_order->user_ID = $user_ID[0];
        $user_order->address_ID = $address;
        $user_order->order_payment_method = $payment;
        $user_order->tmp_cart_rand = $tmp_cart_rand[0];
        $user_order->save();


        for($x = 0; $x < $cart_ID_count; $x++){
            $order_ID_tmp = DB::select('SELECT order_ID FROM user_order WHERE tmp_cart_rand = ?', [$tmp_cart_rand[0]] , 'AND user_ID = ?', [$user_ID[0]]);
            $sql_order_ID = $order_ID_tmp[0]->order_ID;
            
            DB::insert('INSERT INTO tmp_cart (cart_ID, prod_ID, user_ID, prod_quantity, tmp_cart_rand) VALUES (?, ?, ?, ?, ?)', [$cart_ID[$x], $prod_ID[$x], $user_ID[$x], $prod_quantity[$x], $tmp_cart_rand[$x]]);

            

            $order_queue = new OrderQueue();
            $order_queue->user_ID = $user_ID[$x];
            $order_queue->order_ID = $sql_order_ID;
            $order_queue->prod_ID = $prod_ID[$x];
            $order_queue->prod_quantity = $prod_quantity[$x];
            $order_queue->save();

            $temp = Cart::where('cart_ID' , '=' , $request->cart_ID[$x]);
            $temp->delete();
        }

        return redirect('dashboard');

    }

    public function clearCart(){
        $user_ID = Auth::User('user_ID');
        $temp = DB::delete('DELETE FROM cart where user_ID = '.$user_ID->user_ID);
        
        return redirect('dashboard');
    }

    

    
}
