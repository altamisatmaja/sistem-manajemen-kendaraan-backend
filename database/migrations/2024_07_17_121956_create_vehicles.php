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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('plat_nomor')->unique();
            $table->string('nomor_identifikasi')->unique();
            $table->string('picture');
            $table->string('tahun_kendaraan');
            $table->tinyInteger('kapasitas_muatan');
            $table->enum('status_kepemilikan', ['Sewa', 'Milik Perusahaan']);

            $table->tinyInteger('merk_vehicle_id');
            $table->tinyInteger('model_vehicle_id');
            $table->tinyInteger('category_vehicle_id');
            $table->tinyInteger('type_vehicle_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
