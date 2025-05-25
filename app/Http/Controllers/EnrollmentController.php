<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnrollmentController extends Controller
{
    public function show()
    {
        return view('website.enroll');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'age' => 'required|integer|min:5|max:100',
            'gender' => 'required|in:male,female,other',
            'package' => 'required|in:starter,basic,standard,advanced,professional,master,elite',
            'course_details' => 'required|string',
            'preferred_days' => 'required|array|min:1',
            'preferred_days.*' => 'in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'preferred_times' => 'required|array|min:1',
            'preferred_times.*' => 'in:morning_(8am-12pm),afternoon_(12pm-4pm),evening_(4pm-8pm),night_(8pm-10pm)',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $enrollment = Enrollment::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'age' => $request->age,
                'gender' => $request->gender,
                'package' => $request->package,
                'course_details' => $request->course_details,
                'preferred_days' => $request->preferred_days,
                'preferred_times' => $request->preferred_times,
                'status' => 'pending'
            ]);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Your enrollment has been submitted successfully! We will contact you soon.'
                ]);
            }

            return redirect()->route('enroll.show')
                ->with('success', 'Your enrollment has been submitted successfully! We will contact you soon.');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred while saving your enrollment. Please try again.'
                ], 500);
            }

            return redirect()->back()
                ->with('error', 'An error occurred while saving your enrollment. Please try again.')
                ->withInput();
        }
    }
} 