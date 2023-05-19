<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserAddress extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'user_ID',
        'address_street',
        'address_barangay',
        'address_city',
        'address_province',
        'address_zipcode',
        'address_country'
    ];

    protected $table = 'user_address';

    
    protected $primaryKey = 'address_ID';
}
