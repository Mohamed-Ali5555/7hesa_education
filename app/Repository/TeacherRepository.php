<?php

namespace App\Repository;

use Exception;
use App\Models\Grade;
use App\Models\Gender;
use App\Models\Section;
use App\Models\Teacher;
use App\Models\Classroom;
use App\Models\Specialization;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\TeacherRepositoryInterface;

class TeacherRepository implements TeacherRepositoryInterface
{

    public function getAllTeachers()
    {
        return Teacher::get();
    }

    public function Getspecialization()
    {
        return specialization::get();
    }

    
    public function GetGrade()
    {
        return Grade::get();
    }
    public function GetClassRoom()
    {
        return Classroom::get();
    }
    public function GetSection()
    {
        return Section::get();
    }

    public function StoreTeachers($request)
    {
        try {
            $Teachers = new Teacher();
            $Teachers->email = $request->Email;
            $Teachers->password = Hash::make($request->Password);
            $Teachers->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $Teachers->Specialization_id = $request->Specialization_id;
            $Teachers->gender = $request->gender;
            $Teachers->Joining_Date = $request->Joining_Date;
            $Teachers->Address = $request->Address;
            $Teachers->grade_id = $request->grade_id;
            $Teachers->classroom_id = $request->classroom_id;
            $Teachers->section_id = $request->section_id;
            $Teachers->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('admin.Teachers.index');
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }


    public function editTeachers($id)
    {
        return Teacher::findOrFail($id);
    }




    public function UpdateTeachers($request)
    {
        try {
            $teacher = Teacher::findOrFail($request->id);
            $teacher->email = $request->Email;
            $teacher->password = Hash::make($request->Password);
            $teacher->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $teacher->Specialization_id = $request->Specialization_id;
            $teacher->gender = $request->gender;
            $teacher->Joining_Date = $request->Joining_Date;
            $teacher->Address = $request->Address;
            $teacher->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('admin.Teachers.index');
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function DeleteTeachers($request)
    {
        Teacher::findOrFail($request->id)->delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('admin.Teachers.index');
    }



}
