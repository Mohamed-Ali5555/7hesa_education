<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;

class CompleteController extends Controller
{

    public function index($student_id)
    {
        $my_classes = Grade::get();

        $student = Student::where('student_id', $student_id)->firstOrFail();
        return view('pages.Students.Regsteration.updateRegistration', compact('student', 'my_classes'));
    }

    public function update(Request $request, $id)
    {
        //
        $student = Student::find($request->student_id);
        $student->gender = $request->gender;
        // $student->name = '';
        // $student->Specialization_id  = '';
        // $student->grade_id = '';
        // $student->classroom_id = '';
        // $student->section_id = '';
        // $student->teacher_id = '';
        $student->save();

    }


}
