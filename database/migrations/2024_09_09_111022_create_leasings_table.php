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
        Schema::create('leasings', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('car_id')->references('id')->on('cars')->cascadeOnDelete();
            $table->date('rental_day');
            $table->time('rental_hour');
            $table->date('delivery_day');
            $table->time('delivery_hour');
            $table->integer('day_num');
            $table->boolean('teslim_alindi');
            $table->boolean('teslim_verildi');

            $table->integer('driver_id')->nullable();
            $table->integer('driver_price')->default(0);
            $table->integer('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leasings');
    }
};
