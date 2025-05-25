<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::latest()->paginate(10);
        return view('admin.enrollments.index', compact('enrollments'));
    }

    public function show(Enrollment $enrollment)
    {
        return view('admin.enrollments.show', compact('enrollment'));
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,rejected',
            'notes' => 'nullable|string'
        ]);

        $enrollment->update($validated);

        return redirect()->route('admin.enrollments.index')
            ->with('success', 'Enrollment status updated successfully');
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->route('admin.enrollments.index')
            ->with('success', 'Enrollment deleted successfully');
    }
} 