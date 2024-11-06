<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeachers;
use App\Interfaces\TeacherRepositoryInterface;
use DB;
class TeacherController extends Controller
{
    protected $teacherInterface;

    public function __construct(TeacherRepositoryInterface $teacherInterface)
    {
        $this->teacherInterface = $teacherInterface;
    }

    public function index()
    {
        $Teachers = $this->teacherInterface->getAllTeachers();

        return view('admin.pages.teachers.teachers', compact('Teachers'));
    }

    public function create()
    {
        $specializations = $this->teacherInterface->Getspecialization();
        $grades = $this->teacherInterface->GetGrade();
        $classroom = $this->teacherInterface->GetClassRoom();
        $sections = $this->teacherInterface->GetSection();
        return view('admin.pages.teachers.create', compact('specializations', 'grades', 'classroom', 'sections'));
    }


    public function store(Request $request)
    {
        return $this->teacherInterface->StoreTeachers($request);
    }


    public function show($id)
    {
        $teacher = Teacher::where('id',$id)->first();
        
        
            
      $students = DB::table('students')
        ->join('payments', 'students.id', '=', 'payments.student_id')
        ->where('payments.teacher_id', $id)
        ->select('students.*')
        ->distinct() // لضمان عدم تكرار الطلاب
        ->get();
        
    
    
        // $teacher = Teacher::whereId($id)->with('students')->withCount('students','exams')->firstOrFail();

        return view('admin.pages.teachers.show', compact('teacher','students'));
    }


    public function edit($id)
    {
        $Teachers = $this->teacherInterface->editTeachers($id);
        $specializations = $this->teacherInterface->Getspecialization();
        // dd($Teachers, $Teachers->specializations);

        return view('admin.pages.teachers.edit', compact('Teachers', 'specializations'));
    }


    public function update(Request $request)
    {
        return $this->teacherInterface->UpdateTeachers($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return $this->teacherInterface->DeleteTeachers($request);
    }
}
