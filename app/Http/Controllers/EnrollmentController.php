<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrollmentRequest;
use App\Mail\EnrollmentNotification;
use App\Models\Enrollment;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
                'package' => null,
                'course_details' => $request->course_interest,
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

            // Send email notification
            try {
                Mail::to('Madrassatazhary4@gmail.com')->send(new EnrollmentNotification($enrollment));
                \Log::info('Enrollment notification email sent successfully');
            } catch (\Exception $e) {
                \Log::error('Failed to send enrollment notification email', [
                    'error' => $e->getMessage(),
                    'enrollment_id' => $enrollment->id
                ]);
                
                // Fallback: Log enrollment details to a file for manual review
                $logData = [
                    'timestamp' => now()->format('Y-m-d H:i:s'),
                    'enrollment_id' => $enrollment->id,
                    'name' => $enrollment->name,
                    'email' => $enrollment->email,
                    'phone' => $enrollment->mobile,
                    'course' => $enrollment->package,
                    'arabic_level' => $enrollment->arabic_level,
                    'details' => $enrollment->course_details,
                    'preferred_days' => $enrollment->preferred_days,
                    'preferred_times' => $enrollment->preferred_times,
                ];
                
                \Log::channel('enrollments')->info('New enrollment (email failed)', $logData);
            }

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
                    'message' => $e->getMessage(),
                ], 500);
            }

            // Show error message
            return redirect()->back()
                ->withInput()
                ->with('error', __('website.An error occurred while saving your enrollment. Please try again.'));
        }
    }
} 