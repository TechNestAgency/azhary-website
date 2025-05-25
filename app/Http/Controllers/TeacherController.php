<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::latest()->paginate(10);
        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'name_fr' => 'nullable|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'short_description' => 'required|string',
            'short_description_fr' => 'nullable|string',
            'full_bio' => 'required|string',
            'full_bio_fr' => 'nullable|string',
            'languages' => 'nullable|string',
            'languages_fr' => 'nullable|string',
            'certifications' => 'nullable|string',
            'certifications_fr' => 'nullable|string',
            'teaching_methods' => 'required|string',
            'teaching_methods_fr' => 'nullable|string',
            'materials_used' => 'required|string',
            'materials_used_fr' => 'nullable|string',
            'years_experience' => 'required|integer|min:0',
            'total_teaching_hours' => 'required|integer|min:0',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('teachers', 'public');
        }

        Teacher::create($validated);

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Teacher created successfully.');
    }

    public function show(Teacher $teacher)
    {
        return view('admin.teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.form', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'name_fr' => 'nullable|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'short_description' => 'required|string',
            'short_description_fr' => 'nullable|string',
            'full_bio' => 'required|string',
            'full_bio_fr' => 'nullable|string',
            'languages' => 'nullable|string',
            'languages_fr' => 'nullable|string',
            'certifications' => 'nullable|string',
            'certifications_fr' => 'nullable|string',
            'teaching_methods' => 'required|string',
            'teaching_methods_fr' => 'nullable|string',
            'materials_used' => 'required|string',
            'materials_used_fr' => 'nullable|string',
            'years_experience' => 'required|integer|min:0',
            'total_teaching_hours' => 'required|integer|min:0',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('photo')) {
            if ($teacher->photo) {
                Storage::disk('public')->delete($teacher->photo);
            }
            $validated['photo'] = $request->file('photo')->store('teachers', 'public');
        }

        $teacher->update($validated);

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Teacher updated successfully.');
    }

    public function destroy(Teacher $teacher)
    {
        if ($teacher->photo) {
            Storage::disk('public')->delete($teacher->photo);
        }
        
        $teacher->delete();

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Teacher deleted successfully.');
    }
}
