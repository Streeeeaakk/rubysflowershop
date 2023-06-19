<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProfilePictureController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

//Routes to AuthController
Route::post('custom-login', 'App\Http\Controllers\CustomAuthController@customLogin') -> name('login.custom');
Route::post('custom-registration', 'App\Http\Controllers\CustomAuthController@customRegistration') -> name('register.custom');
Route::get('sign-out', 'App\Http\Controllers\CustomAuthController@signOut') -> name('signout');

//Routes to CartController
Route::post('addtocart', 'App\Http\Controllers\CartController@addtocart') -> name('addtocart');
Route::get('deleteFromCart/{cart_ID}', 'App\Http\Controllers\CartController@deleteFromCart') -> name('deleteFromCart');
Route::post('addToTmpCart', 'App\Http\Controllers\CartController@addToTmpCart') -> name('addToTmpCart');
Route::get('clearCart', 'App\Http\Controllers\CartController@clearCart') -> name('clearCart');
Route::post('edit_quantity', 'App\Http\Controllers\CartController@edit_quantity') -> name('edit_quantity');

//Routes to AddressController
Route::post('saveAddress', 'App\Http\Controllers\AddressController@saveAddress') -> name('saveAddress');

//Routes to ProfilePictureController
Route::post('/', 'App\Http\Controllers\ProfilePictureController@store') -> name('store');

//Routes to ProductController
Route::post('saveproduct', 'App\Http\Controllers\ProductController@saveproduct') -> name('saveproduct');
Route::get('deleteProduct/{prod_ID}', 'App\Http\Controllers\ProductController@deleteProduct') -> name('deleteProduct');

//Routes to pages
Route::get('/', 'App\Http\Controllers\PagesController@index') -> name('login');
Route::get('login', 'App\Http\Controllers\PagesController@index') -> name('login');
Route::get('registration', 'App\Http\Controllers\PagesController@registration') -> name('register');
Route::get('dashboard', 'App\Http\Controllers\PagesController@dashboard') -> name('dashboard');
Route::get('pendingOrders', 'App\Http\Controllers\PagesController@pendingOrders') -> name('pendingOrders');
Route::get('aboutUs', 'App\Http\Controllers\PagesController@aboutUs') -> name('aboutUs');
Route::get('profile', 'App\Http\Controllers\PagesController@profile') -> name('profile');
Route::get('addAddress', 'App\Http\Controllers\PagesController@addAddress') -> name('addAddress');
Route::get('cart', 'App\Http\Controllers\PagesController@cart') -> name('cart');
Route::get('product', 'App\Http\Controllers\PagesController@product') -> name('product');
Route::get('addtocart_quantity/{prod_ID}', 'App\Http\Controllers\PagesController@addtocart_quantity') -> name('addtocart_quantity');
Route::get('editQuantity/{cart_ID}', 'App\Http\Controllers\PagesController@editQuantity') -> name('editQuantity');
Route::get('transaction',  'App\Http\Controllers\PagesController@transaction') -> name('transaction');
Route::get('sales', 'App\Http\Controllers\PagesController@sales') -> name('sales');
Route::post('salesReport', 'App\Http\Controllers\PagesController@salesReport') -> name('salesReport');

Route::get('/dbconn', function () {
    return view('pages.dbconn');
});


