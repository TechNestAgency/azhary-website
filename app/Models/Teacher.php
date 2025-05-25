<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_fr',
        'photo',
        'short_description',
        'short_description_fr',
        'full_bio',
        'full_bio_fr',
        'languages',
        'languages_fr',
        'certifications',
        'certifications_fr',
        'teaching_methods',
        'teaching_methods_fr',
        'materials_used',
        'materials_used_fr',
        'rating',
        'total_reviews',
        'total_teaching_hours',
        'years_experience',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'rating' => 'decimal:2',
    ];

    public function reviews()
    {
        return $this->hasMany(TeacherReview::class);
    }

    public function getAverageRatingAttribute()
    {
        return $this->reviews()->avg('rating') ?? 0;
    }

    public function getTotalReviewsAttribute()
    {
        return $this->reviews()->count();
    }
}
