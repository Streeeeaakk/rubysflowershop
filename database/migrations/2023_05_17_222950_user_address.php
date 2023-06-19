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
        Schema::create('user_address', function (Blueprint $table) {
            $table -> id('address_ID');
            $table -> unsignedBigInteger('user_ID');
            $table -> string('address_street');
            $table -> string('address_barangay');
            $table -> string('address_city');
            $table -> string('address_province');
            $table -> integer('address_zipcode');
            $table -> string('address_country');
            $table -> timestamps();

            $table -> foreign('user_ID')->references('user_ID')->on('users');
       

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_address');
    }
};
