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
        Schema::create('order_queue', function (Blueprint $table) {
            $table -> id('order_queue_ID');
            $table -> unsignedBigInteger('user_ID');
            $table -> unsignedBigInteger('order_ID');
            $table -> unsignedBigInteger('prod_ID');
            $table -> integer('prod_quantity');
            $table -> integer('order_delivered') -> default('0');
            $table -> timestamps();

            $table -> foreign('user_ID')->references('user_ID')->on('users');
            $table -> foreign('order_ID')->references('order_ID')->on('user_order');
            $table -> foreign('prod_ID')->references('prod_ID')->on('product');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_queue');
    }
};
