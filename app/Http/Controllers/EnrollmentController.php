<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrollmentRequest;
use App\Models\Enrollment;
use App\Models\Teacher;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function show(Request $request)
    {
        $teachers = Teacher::where('is_active', true)
            ->latest()
            ->take(5)
            ->get();
            
        $selectedPackage = $request->get('package');
            
        return view('website.enroll', compact('teachers', 'selectedPackage'));
    }

    public function store(EnrollmentRequest $request)
    {
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

            // Log success for debugging
            \Log::info('Enrollment success - redirecting with success message');
            
            // Show success message
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

            // Show error message
            return redirect()->back()
                ->withInput()
                ->with('error', __('website.An error occurred while saving your enrollment. Please try again.'));
        }
    }
} 