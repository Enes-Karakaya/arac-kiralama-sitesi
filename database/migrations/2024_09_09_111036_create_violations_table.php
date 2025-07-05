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
        Schema::create('violations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('car_id')->references('id')->on('cars')->cascadeOnDelete();

            $table->string('violation_type');
            $table->string('violation_photo');
            $table->integer('cost');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('violations');
    }
};
