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
        Schema::create('vehicle_bookings', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('durasi');
            $table->string('keperluan');
            $table->dateTime('booked_at');

            $table->tinyInteger('start_from_minning_id');
            $table->tinyInteger('end_to_minning_id');
            $table->tinyInteger('employee_id');
            $table->tinyInteger('vehicles_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_bookings');
    }
};
