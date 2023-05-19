<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
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
            return view('pages.dashboard');
        }else{
  
        return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function pendingOrders()
    {
        if(Auth::check()){
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
            return view('pages.profile', ['address' => $address]);
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
    
}
