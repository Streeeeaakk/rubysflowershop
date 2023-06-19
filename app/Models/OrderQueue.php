<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderQueue extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_ID',
        'address_ID',
        'prod_ID',
        'prod_quantity',
        'order_delivered'
    ];

    protected $table = 'order_queue';

    protected $primaryKey = 'order_queue_ID';
}
