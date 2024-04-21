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
        Schema::create('about_profile_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('about_profile_id');
            $table->string('image_path');
            $table->timestamps();

            $table->foreign('about_profile_id')->references('id')->on('about_profile')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_profile_images');
    }
};
