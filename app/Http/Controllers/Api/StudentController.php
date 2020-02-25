<?php

namespace App\Http\Controllers\Api;

use App\Model\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{

    public function index()
    {
        $student = Student::all();
        return response()->json($student);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'classe_id' => 'required',
            'section_id' => 'required',
            'name' => 'required|unique:students',
            'phone' => 'required|unique:students',
            'email' => 'required|unique:students',
            'password' => 'required|unique:students',
            'image' => 'required|unique:students',
            'address' => 'required|unique:students',
            'gender' => 'required|unique:students',
        ]);
        $section = Section::create($request->all());
        //return response()->json($subject);
        return response('section');
    }

    public function show(Student $student)
    {
        //
    }

    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        //
    }
}