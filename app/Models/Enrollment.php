<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'age',
        'gender',
        'package',
        'course_details',
        'preferred_days',
        'preferred_times',
        'status',
        'notes'
    ];

    protected $casts = [
        'preferred_days' => 'array',
        'preferred_times' => 'array',
        'age' => 'integer'
    ];
}
