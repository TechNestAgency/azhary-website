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
        'quran_recitation' => 'Recitation of the Quran',
        'tajweed' => 'Tajweed Rules',
        'arabic_grammar' => 'Arabic Grammar',
        'islamic_studies' => 'Islamic Studies',
        'quran_memorization' => 'Quran Memorization'
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
