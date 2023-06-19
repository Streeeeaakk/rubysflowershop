<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class ProductController extends Controller
{
    public function saveProduct(Request $request){
        $request -> validate([
            'prod_name' => 'required',
            'prod_category' => 'required',
            'prod_price' => 'required',
            'prod_picture' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $path = public_path('images/products');
        !is_dir($path) && mkdir($path, 0777, true);

        $prod_picture_name = time() . '.' . $request->prod_picture->extension();
        $request->prod_picture->move($path, $prod_picture_name);

        $product = new Product();
        $product->prod_name = $request->prod_name;
        $product->prod_category = $request->prod_category;
        $product->prod_price = $request->prod_price;
        $product->prod_picture = $prod_picture_name;
        $product->save();

        return redirect('product')->withSuccess('Product Successfuly Added');
    }

    public function deleteProduct(Request $request){
        Schema::disableForeignKeyConstraints();
        DB::delete('DELETE FROM product where prod_ID = '.$request->prod_ID);
        Schema::enableForeignKeyConstraints();
        echo "Product is removed in cart! <p>Redirecting in 3 seconds...";
        echo '<meta http-equiv="refresh" content="3;url=dashboard" />';
        return redirect("product");
    }



}
