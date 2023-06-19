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
        Schema::create('user_order', function (Blueprint $table) {
            $table -> id('order_ID');
            $table -> unsignedBigInteger('user_ID');
            $table -> unsignedBigInteger('address_ID');
            $table -> string('order_payment_method');
            $table -> integer('tmp_cart_rand');
            $table -> timestamps();

            $table -> foreign('user_ID')->references('user_ID')->on('users');
            $table -> foreign('address_ID')->references('address_ID')->on('user_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_order');
    }
};
