<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_ID',
        'prod_ID',
        'prod_quantity'
    ];

    protected $table = 'cart';

    
    protected $primaryKey = 'cart_ID';

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
