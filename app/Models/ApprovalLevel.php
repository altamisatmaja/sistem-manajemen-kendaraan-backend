<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalLevel extends Model
{
    use HasFactory;

    protected $table = 'approval_levels';

    protected $fillable = [
        'nama',
        'level',
    ];
}
