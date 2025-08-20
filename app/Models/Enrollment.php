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
        'arabic_level',
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

    // Course interest mapping
    protected static $courseMapping = [
        'quran' => 'Quran (Recitation, Tajweed & Memorization)',
        'arabic_language' => 'Arabic Language',
        'islamic_studies' => 'Islamic Studies',
        'ijazah' => 'Ijazah (Qur\'an Certification)'
    ];

    public function getCourseInterestTextAttribute()
    {
        return self::$courseMapping[$this->package] ?? $this->package;
    }

    // Arabic level mapping
    protected static $arabicLevelMapping = [
        'beginner' => 'I have some notions',
        'intermediate' => 'Intermediate',
        'advanced' => 'Advanced',
        'native' => 'Native speaker'
    ];

    public function getArabicLevelTextAttribute()
    {
        return self::$arabicLevelMapping[$this->arabic_level] ?? $this->arabic_level;
    }
}
