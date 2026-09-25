<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
{
    return view('students.create');
}
    /**
     * Display a listing of the students.
     */
    public function index()
    {
        $students = Student::where('user_id', auth()->id())->get();

        return view('students.index', compact('students'));
    }

    /**
     * Store a newly created student.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255|unique:students,registration_number',
            'course' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
        ]);

        $validated['user_id'] = auth()->id();

        Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student registered successfully.');
    }

    /**
     * Remove the specified student.
     */
    public function edit(Student $student)
{
    return view('students.edit', compact('student'));
}

public function update(Request $request, Student $student)
{
    $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'registration_number' => 'required|string|max:255',
        'course' => 'required|string|max:255',
        'gender' => 'required|in:Male,Female',
    ]);

    $student->update($validated);

    return redirect()
        ->route('students.index')
        ->with('success', 'Student information updated successfully.');
}


    public function destroy(Student $student)
    {
        if ($student->user_id !== auth()->id()) {
            abort(403);
        }

        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student deleted successfully.');
    }
}