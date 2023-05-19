<?php

 namespace App\Repository;

 class UserRepository
 {
    public function createUser(){
        
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
    }
 }