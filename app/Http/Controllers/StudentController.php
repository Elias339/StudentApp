<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private static $students,$student;

    public function index(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        Student::saveStudent($request);
        return back()->with('message','Info save !!');

    }

    public function studentList()
    {
        self::$students=Student::all();
       return view('student-list',['students'=>self::$students]);
    }

    public function studentDelete(Request $request)
    {
        Student::deleteStudent($request->id);
        return back()->with('message','Info delete');
    }


    public function studentEdit($id)
    {
        self::$student=Student::find($id);
        return view('student-edit', ['student'=>self::$student]);
    }

    public function studentUpdate(Request $request)
    {
        Student::studentUpdate($request);
        return back()->with('message','Info Update !!');

    }
}
