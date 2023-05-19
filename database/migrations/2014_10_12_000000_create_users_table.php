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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_ID'); 
            $table->string('user_level') -> default('1');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('user_fname');
            $table->string('user_lname');
            $table->string('user_MI');
            $table->string('user_gender');
            $table->string('user_phonenumber');
            $table->string('user_birthdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
