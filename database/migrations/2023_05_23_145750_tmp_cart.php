<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tmp_cart', function (Blueprint $table) {
            $table -> id('tmp_cart_ID');
            $table -> integer('cart_ID');
            $table -> unsignedBigInteger('prod_ID');
            $table -> unsignedBigInteger('user_ID');
            $table -> integer('prod_quantity');
            $table -> integer('tmp_cart_rand');
            $table -> timestamps();

            $table -> foreign('user_ID')->references('user_ID')->on('users');
            $table -> foreign('prod_ID')->references('prod_ID')->on('product');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmp_cart');
    }
};
