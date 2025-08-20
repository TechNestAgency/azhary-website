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

    // Accessor methods for localized content
    public function getLocalizedNameAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'fr' && $this->name_fr ? $this->name_fr : $this->name;
    }

    public function getLocalizedShortDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'fr' && $this->short_description_fr ? $this->short_description_fr : $this->short_description;
    }

    public function getLocalizedFullBioAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'fr' && $this->full_bio_fr ? $this->full_bio_fr : $this->full_bio;
    }

    public function getLocalizedLanguagesAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'fr' && $this->languages_fr ? $this->languages_fr : $this->languages;
    }

    public function getLocalizedCertificationsAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'fr' && $this->certifications_fr ? $this->certifications_fr : $this->certifications;
    }

    public function getLocalizedTeachingMethodsAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'fr' && $this->teaching_methods_fr ? $this->teaching_methods_fr : $this->teaching_methods;
    }

    public function getLocalizedMaterialsUsedAttribute()
    {
        $locale = app()->getLocale();
        return $locale === 'fr' && $this->materials_used_fr ? $this->materials_used_fr : $this->materials_used;
    }
}
