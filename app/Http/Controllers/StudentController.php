<?php

namespace App\Http\Controllers;

use App\Record;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::get();
        return view('student.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.add');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
        ]);

        $std = new Student();
        $std->first_name = $request->fname;
        $std->last_name = $request->lname;
        $std->save();
        return redirect()->route('student.index')->with('status', 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $rec = Record::where('student_id', $student->id)->get();
        $student = Student::find($student->id);
        return view('student.view', compact('rec', 'student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $std = Student::find($student->id);
        $std->first_name = $request->fname;
        $std->last_name = $request->lname;
        $std->status = 0;
        $std->save();
        return redirect()->route('student.index')->with('status', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $std = Student::find($student->id);
        $std->delete();
        return redirect()->route('student.index')->with('status', 'Student Deleted Successfully');
    }
}
