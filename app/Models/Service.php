<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'description',
        'services_list',
        'status',
        'image', // Image field
    ];

    // Cast the JSON field to an array
    protected $casts = [
        'services_list' => 'array',
    ];
}
