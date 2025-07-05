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
        Schema::create('maintencances', function (Blueprint $table) {
            $table->id();

            $table->foreignId('car_id')->references('id')->on('cars')->cascadeOnDelete();

            $table->date('last_maintence_date');
            $table->string('problem');
            $table->integer('cost');
            $table->string('description');
            $table->string('bil_photo');
            $table->integer('status')->default(1);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintencances');
    }
};
