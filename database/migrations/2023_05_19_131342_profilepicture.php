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
        
        Schema::create('profilepicture', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_ID');
            $table->string('profile_picture_path');
            $table->timestamps();

            $table -> foreign('user_ID')->references('user_ID')->on('users');
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profilepicture');
    }
};
