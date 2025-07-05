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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('yerler_point_id')->references('id')->on('yerler_points')->cascadeOnDelete();

            $table->string('name');
            $table->string('surname');
            $table->char('tc' ,11);
            $table->date('birth_day');
            $table->string('email');
            $table->char('phone' ,11);
            $table->integer(column: 'status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
