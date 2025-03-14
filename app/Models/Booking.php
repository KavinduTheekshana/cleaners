<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'service',
        'date',
        'time',
        'duration',
        'name',
        'email',
        'phone',
        'message',
    ];
}
