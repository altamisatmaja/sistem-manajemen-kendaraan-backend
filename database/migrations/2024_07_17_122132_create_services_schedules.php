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
        Schema::create('services_schedules', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('region_id');
            $table->tinyInteger('vehicle_id');
            $table->tinyInteger('biaya');
            $table->string('attachment');
            $table->string('keterangan');

            $table->dateTime('service_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_schedules');
    }
};
