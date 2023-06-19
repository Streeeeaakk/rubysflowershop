<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilePicture;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facedes\Storage;

class ProfilePictureController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'user_ID' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $temp = ProfilePicture::where('user_ID' , '=' , $request->user_ID);
        $temp->delete();

        $path = public_path('images/profile');
        !is_dir($path) && mkdir($path, 0777, true);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($path, $imageName);

        $image = new ProfilePicture();   
        $image->user_ID = $request->user_ID;
        $image->profile_picture_path = $imageName;
        $image->save();

        return redirect()->back()
            ->with('success', 'You have successfully upload image.');

    }
}
