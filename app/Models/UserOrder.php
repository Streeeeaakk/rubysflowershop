<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_ID',
        'address_ID',
        'order_payment_method',
        'tmp_cart_rand'
    ];

    protected $table = 'user_order';

    protected $primaryKey = 'order_ID';
}


