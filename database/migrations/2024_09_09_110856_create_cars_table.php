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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->foreignId('users_id')->nullable()->references('id')->on('users');
            $table->foreignId('yerler_point_id')->references('id')->on('yerler_points')->cascadeOnDelete();

            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->string('Fuel_Type');
            $table->string('Car_Type');
            $table->string('color');
            $table->string('photo')->default('users/photo.png');
            $table->integer('people_num');
            $table->integer('depozito');
            $table->integer('toplam_km');
            $table->string('teslimat_place');
            $table->string('teslimat_address');
            $table->integer('minimum_age');
            $table->integer('minimum_ahliyet_year');
            $table->integer('car_price');
            $table->integer('status');

            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
