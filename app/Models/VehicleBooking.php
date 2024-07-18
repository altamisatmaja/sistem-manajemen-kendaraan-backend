<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleBooking extends Model
{
    use HasFactory;

    protected $table = 'vehicle_bookings';

    protected $fillable = [
        'durasi',
        'keperluan',
        'booked_at',
        'start_from_mining_id',
        'end_to_mining_id',
        'employee_id',
        'vehicles_id',
    ];
}
