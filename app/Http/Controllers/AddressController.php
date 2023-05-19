<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\UserAddress;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function saveAddress(Request $request){
        $request -> validate([
            'user_ID' => 'required',
            'address_street' => 'required',
            'address_barangay' => 'required',
            'address_city' => 'required',
            'address_province' => 'required',
            'address_zipcode' => 'required',
            'address_country' => 'required'
        ]);

        $addressData = $request->all();
        $check = $this -> create($addressData);

        return redirect("profile")->withSuccess('Successfuly Saved');
    }

    public function create(array $addressData)
    {
      return UserAddress::create([
        'user_ID' => $addressData['user_ID'],
        'address_street' => $addressData['address_street'],
        'address_barangay' => $addressData['address_barangay'],
        'address_city' => $addressData['address_city'],
        'address_province' => $addressData['address_province'],
        'address_zipcode' => $addressData['address_zipcode'],
        'address_country' => $addressData['address_country'],
      ]);
    }
}
