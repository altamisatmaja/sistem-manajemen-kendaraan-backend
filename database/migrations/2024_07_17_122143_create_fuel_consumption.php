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
            $table->tinyInteger('biaya');
            $table->tinyInteger('volume_bbm');
            $table->enum('jenis_bahan_bakar', ['Solar, Bensin']);
            $table->string('odometer');
            $table->string('keterangan');
            $table->string('attachment');

            $table->tinyInteger('region_id');
            $table->tinyInteger('vehicle_id');
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
