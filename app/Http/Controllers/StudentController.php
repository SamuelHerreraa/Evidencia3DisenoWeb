<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use App\Models\Career;


class StudentController extends Controller
{
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }


    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    public function create()
    {
        $careers = Career::all();
        return view('students.create', compact('careers'));
    }

    public function store(Request $request)
    {
        $request->validate(Student::rules());

        Student::create($request->all());

        return redirect('/home')->with('success', 'Student added successfully.');
    }
}
