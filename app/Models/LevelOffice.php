<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelOffice extends Model
{
    use HasFactory;

    protected $table = 'level_offices';

    protected $fillable = [
        'nama_level',
        'keterangan',
    ];
}
