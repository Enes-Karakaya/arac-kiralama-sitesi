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
        Schema::create('yerler_points', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')->references('id')->on('users')->cascadeOnDelete();

            $table->string('name');
            $table->string('city');
            $table->string('ilce');
            $table->string('mahalle');
            $table->string('address');
            $table->longText('location');
            //$table->char('phone' , 11   );


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yerler_points');
    }
};
