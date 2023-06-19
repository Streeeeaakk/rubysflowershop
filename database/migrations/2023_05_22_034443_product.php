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
        Schema::create('product', function (Blueprint $table) {
            $table -> id('prod_ID');
            $table -> string('prod_name');
            $table -> string('prod_category');
            $table -> string('prod_price');
            $table -> string('prod_picture');
            $table -> timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
