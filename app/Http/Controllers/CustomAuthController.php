<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }

        return redirect('login')->with('success', 'Login details are not valid');
  
    }


    public function customRegistration(Request $request){
        $request -> validate([
            'email' => 'email|required|unique:users',
            'password' => 'required|min:5',
            'user_fname' => 'required',
            'user_lname' => 'required',
            'user_MI' => 'required',
            'user_gender' => 'required',
            'user_phonenumber' => 'required',
            'user_birthdate' => 'required'
        ]);

        $data = $request->all();
        $check = $this -> create($data);

        return redirect("login")->withSuccess('You have Registered');
    }

    public function create(array $data)
    {
      return User::create([
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'user_fname' => $data['user_fname'],
        'user_lname' => $data['user_lname'],
        'user_MI' => $data['user_MI'],
        'user_gender' => $data['user_gender'],
        'user_phonenumber' => $data['user_phonenumber'],
        'user_birthdate' => $data['user_birthdate']
      ]);
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
   
}
