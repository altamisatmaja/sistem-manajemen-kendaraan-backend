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
        Schema::create('fuel_consumption', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('region_id');
            $table->tinyInteger('vehicle_id');
            $table->tinyInteger('fuel_amount');
            $table->tinyInteger('cost');
            $table->string('kilometer');
            $table->string('keterangan');
            $table->string('attachment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_consumption');
    }
};
