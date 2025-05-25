<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'reviewer_name',
        'reviewer_email',
        'rating',
        'comment'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
