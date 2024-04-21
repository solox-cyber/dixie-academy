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
        Schema::create('profitable', function (Blueprint $table) {
            $table->id();
            $table->text('join_class')->nullable();
            $table->text('month_of_class')->nullable();
            $table->text('one_on_one_training')->nullable();
            $table->text('teach_a_team')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profitable');
    }
};
