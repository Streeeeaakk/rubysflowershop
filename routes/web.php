<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Routes to AuthController
Route::post('custom-login', 'App\Http\Controllers\CustomAuthController@customLogin') -> name('login.custom');
Route::post('custom-registration', 'App\Http\Controllers\CustomAuthController@customRegistration') -> name('register.custom');
Route::get('sign-out', 'App\Http\Controllers\CustomAuthController@signOut') -> name('signout');

//Routes to AddressController
Route::post('saveAddress', 'App\Http\Controllers\AddressController@saveAddress') -> name('saveAddress');


//Routes to pages
Route::get('/', 'App\Http\Controllers\PagesController@index') -> name('login');
Route::get('login', 'App\Http\Controllers\PagesController@index') -> name('login');
Route::get('registration', 'App\Http\Controllers\PagesController@registration') -> name('register');
Route::get('dashboard', 'App\Http\Controllers\PagesController@dashboard') -> name('dashboard');
Route::get('pendingOrders', 'App\Http\Controllers\PagesController@pendingOrders') -> name('pendingOrders');
Route::get('aboutUs', 'App\Http\Controllers\PagesController@aboutUs') -> name('aboutUs');
Route::get('profile', 'App\Http\Controllers\PagesController@profile') -> name('profile');
Route::get('addAddress', 'App\Http\Controllers\PagesController@addAddress') -> name('addAddress');

//Test Route to get data from database

Route::get('/dbconn', function () {
    return view('pages.dbconn');
});


