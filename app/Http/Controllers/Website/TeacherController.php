<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\TeacherReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::where('is_active', true)
            ->latest()
            ->paginate(12);
            
        return view('website.teachers.index', compact('teachers'));
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        $locale = app()->getLocale();
        
        // If French is selected and French content exists, use it
        if ($locale === 'fr') {
            $teacher->name = $teacher->name_fr ?: $teacher->name;
            $teacher->short_description = $teacher->short_description_fr ?: $teacher->short_description;
            $teacher->full_bio = $teacher->full_bio_fr ?: $teacher->full_bio;
            $teacher->languages = $teacher->languages_fr ?: $teacher->languages;
            $teacher->certifications = $teacher->certifications_fr ?: $teacher->certifications;
            $teacher->teaching_methods = $teacher->teaching_methods_fr ?: $teacher->teaching_methods;
            $teacher->materials_used = $teacher->materials_used_fr ?: $teacher->materials_used;
        }
        
        // Get related teachers (other active teachers)
        $relatedTeachers = Teacher::where('is_active', true)
            ->where('id', '!=', $teacher->id)
            ->latest()
            ->limit(5)
            ->get();
        
        return view('website.teacher-details', compact('teacher', 'relatedTeachers'));
    }

    public function storeReview(Request $request, Teacher $teacher)
    {
        try {
            $rules = [
                'rating' => 'required|integer|min:1|max:5',
                'comment' => 'required|string|min:10|max:500',
                'reviewer_name' => 'required|string|max:255',
                'reviewer_email' => 'required|email|max:255',
            ];

            $validated = $request->validate($rules);

            // Create the review with all required fields
            $review = new TeacherReview([
                'teacher_id' => $teacher->id,
                'reviewer_name' => trim($validated['reviewer_name']),
                'reviewer_email' => trim($validated['reviewer_email']),
                'rating' => $validated['rating'],
                'comment' => trim($validated['comment']),
            ]);

            $review->save();

            // Update teacher's average rating and total reviews
            $averageRating = $teacher->reviews()->avg('rating');
            $totalReviews = $teacher->reviews()->count();
            
            $teacher->update([
                'rating' => round($averageRating, 1),
                'total_reviews' => $totalReviews
            ]);

            return redirect()->back()->with('success', 'Thank you! Your review has been submitted successfully.');

        } catch (\Exception $e) {
            \Log::error('Review submission error: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while submitting your review. Please try again.']);
        }
    }

    public function bookSession(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'preferred_date' => 'required|date',
            'message' => 'required|string'
        ]);

        // Here you would typically:
        // 1. Save the booking request
        // 2. Send notification emails
        // 3. etc.

        return redirect()->back()->with('success', 'Your session request has been submitted successfully. We will contact you shortly.');
    }
} 