<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnrollmentController extends Controller
{
    public function show()
    {
        $teachers = Teacher::where('is_active', true)
            ->latest()
            ->take(5)
            ->get();
            
        return view('website.enroll', compact('teachers'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20|min:8',
            'date' => 'nullable|date|after_or_equal:today',
            'time' => 'nullable|string',
            'arabic_level' => 'required|string|in:beginner,intermediate,advanced,native',
            'course_interest' => 'required|string|in:quran_recitation,tajweed,arabic_grammar,islamic_studies,quran_memorization',
            'message' => 'nullable|string|max:1000',
        ], [
            'name.required' => __('website.Name is required'),
            'name.min' => __('website.Name must be at least 2 characters'),
            'email.required' => __('website.Email is required'),
            'email.email' => __('website.Please enter a valid email address'),
            'phone.required' => __('website.Phone number is required'),
            'phone.min' => __('website.Phone number must be at least 8 characters'),
            'date.after_or_equal' => __('website.Date must be today or a future date'),
            'arabic_level.required' => __('website.Please select your Arabic level'),
            'arabic_level.in' => __('website.Please select a valid Arabic level'),
            'course_interest.required' => __('website.Please select a course'),
            'course_interest.in' => __('website.Please select a valid course'),
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => __('website.Validation failed'),
                    'errors' => $validator->errors()
                ], 422);
            }
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $enrollment = Enrollment::create([
                'name' => trim($request->name),
                'email' => trim($request->email),
                'mobile' => trim($request->phone),
                'age' => null,
                'gender' => null,
                'arabic_level' => $request->arabic_level,
                'package' => $request->course_interest,
                'course_details' => trim($request->message ?? ''),
                'preferred_days' => $request->date ? [$request->date] : [],
                'preferred_times' => $request->time ? [$request->time] : [],
                'status' => 'pending'
            ]);

            // Log the enrollment for debugging
            \Log::info('New enrollment submitted', [
                'id' => $enrollment->id,
                'name' => $enrollment->name,
                'email' => $enrollment->email,
                'course' => $enrollment->package
            ]);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => __('website.Your enrollment has been submitted successfully! We will contact you soon.')
                ]);
            }

            return redirect()->route('enroll.show')
                ->with('success', __('website.Your enrollment has been submitted successfully! We will contact you soon.'));
        } catch (\Exception $e) {
            \Log::error('Enrollment submission error', [
                'error' => $e->getMessage(),
                'data' => $request->except(['_token'])
            ]);

            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => __('website.An error occurred while saving your enrollment. Please try again.')
                ], 500);
            }

            return redirect()->back()
                ->with('error', __('website.An error occurred while saving your enrollment. Please try again.'))
                ->withInput();
        }
    }
} 