<?php


namespace App\Repository;


use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Specialization;
use App\Interfaces\SubjectRepositoryInterface;

class SubjectRepository implements SubjectRepositoryInterface
{

    public function index()
    {
        $subjects = Subject::with('classroom','grade')->get();
        return view('admin.pages.Subjects.index',compact('subjects'));
    }

    public function create()
    {
        $grades = Grade::get();
        $teachers = Teacher::get();
        return view('admin.pages.Subjects.create',compact('grades','teachers'));
    }


    public function store($request)
    {
        try {
            $subjects = new Subject();
            $subjects->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $subjects->grade_id = $request->grade_id;
            $subjects->classroom_id = $request->class_id;
            $subjects->teacher_id = $request->teacher_id;
            $subjects->section_id = $request->section_id;
            $subjects->save();
            $specialization = new Specialization();
            $specialization->Name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $specialization->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('subjects.create');
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function edit($id){

        $subject =Subject::findorfail($id);
        $grades = Grade::get();
        $teachers = Teacher::get();
        return view('admin.pages.Subjects.edit',compact('subject','grades','teachers'));

    }

    public function update($request)
    {
        try {
            $subjects =  Subject::findorfail($request->id);
            $subjects->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $subjects->grade_id = $request->grade_id;
            $subjects->classroom_id = $request->class_id;
            $subjects->teacher_id = $request->teacher_id;
            $subjects->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('subjects.create');
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            Subject::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
