<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'prod_name',
        'prod_category',
        'prod_price',
        'prod_picture'
    ];

    protected $table = 'product';

    
    protected $primaryKey = 'prod_ID';

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
