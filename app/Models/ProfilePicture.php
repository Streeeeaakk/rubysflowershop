<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePicture extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_ID',
        'profile_picture_path'
    ];

    protected $table = 'profilepicture';
}
