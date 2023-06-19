<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmpCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_ID',
        'prod_ID',
        'user_ID',
        'prod_quantity',
        'tmp_cart_rand'
    ];

    protected $table = 'tmp_cart';

    protected $primaryKey = 'tmp_cart_ID';
}
