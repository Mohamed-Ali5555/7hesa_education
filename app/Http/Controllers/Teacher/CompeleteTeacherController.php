<?php

namespace App\Http\Controllers\Teacher;

use Exception;
use App\Models\Grade;
use App\Models\Teacher;
use App\Models\Admin_package;
use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Models\Subject;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeachers;

class CompeleteTeacherController extends Controller
{
    public function index($teacher_id)
    {
        $teacher = Teacher::where('teacher_id', $teacher_id)->firstOrFail();
        $admin_packages = Admin_package::get();

        $data['my_classes'] = Grade::get();
        $data['Specialization'] = Specialization::get();
        $data['subject'] = Subject::get();

        return view('teacher.pages.registration.update', $data, compact('teacher','admin_packages'));
    }


    public function update(StoreTeachers $request)
    {
        try {
            $validatedData = $request->validated();
            $teacher = Teacher::findOrFail(auth('teacher')->id());
            $teacher->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
            $teacher->gender = $request->gender;
            $teacher->Specialization_id = $request->Specialization_id;
            $teacher->grade_id = $request->grade_id;
            $teacher->classroom_id = $request->classroom_id;
            $teacher->section_id = $request->section_id;
            $teacher->subject_id = $request->subject_id;
            $teacher->admin_package_id = $request->admin_package_id;
            $teacher->address = $request->address;

            $teacher->save();
            return redirect()->route('teacher.home');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

}
