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
            $table->tinyInteger('employee_id');
            $table->tinyInteger('vehicles_id');
            $table->tinyInteger('approval_level_one_id');
            $table->tinyInteger('approval_level_two_id');
            $table->enum('status_approval_level_one', ['Pending', 'Disetujui', 'Ditolak']);
            $table->enum('status_approval_level_two', ['Pending', 'Disetujui', 'Ditolak']);
            $table->dateTime('date_approval_level_one');
            $table->dateTime('date_approval_level_two');
            $table->dateTime('booking_date');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->tinyInteger('start_from_minning_id');
            $table->tinyInteger('end_to_minning_id');
            $table->string('keterangan');
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
