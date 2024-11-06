<?php

namespace App\Repository;

use Exception;
use App\Models\{Grade, Classroom, Student, Section, Image};
use Illuminate\Support\Facades\{DB, Storage, Mail, Hash, URL};
use App\Interfaces\StudentRepositoryInterface;


class StudentRepository implements StudentRepositoryInterface
{
        public function Get_Student()
    {
        $students = Student::get();
        return view('admin.pages.students.index', compact('students'));
    }

    public function Edit_Student($id)
    {
        $data['grades'] = Grade::get();
        $Students = Student::findOrFail($id);
        return view('admin.pages.students.edit', $data, compact('Students'));
    }

    public function Update_Student($request)
    {
        try {
            $student = Student::findorfail($request->id);
            $student->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
            $student->email = $request->email;
            $student->password = Hash::make($request->password);
            $student->gender = $request->gender;
            // $student->nationalitie_id = $request->nationalitie_id;
            // $student->blood_id = $request->blood_id;
            $student->Date_Birth = $request->Date_Birth;
            $student->grade_id = $request->grade_id;
            $student->classroom_id = $request->classroom_id;
            $student->section_id = $request->section_id;
            // $student->parent_id = $request->parent_id;
            $student->academic_year = $request->academic_year;
            $student->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('admin.student.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function complete_Student($request)
    {

        try {
            $student = Student::findOrFail($request->student_id);
            $student->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
            $student->gender = $request->gender;
            $student->nationalitie_id = $request->nationalitie_id;
            $student->grade_id = $request->grade_id;
            $student->classroom_id = $request->classroom_id;
            $student->section_id = $request->section_id;
            $student->teacher_id = $request->teacher_id;
            $student->academic_year = $request->academic_year;
            $student->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('student.dashboard.home');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function Create_Student()
    {
        $my_classes = Grade::get();
        return view('admin.pages.students.add', compact('my_classes'));
    }

    public function Show_Student($id)
    {
        $Student = Student::findorfail($id);
        return view('admin.pages.students.show', compact('Student'));
    }


    public function Get_classrooms($id)
    {
        $list_classes = Classroom::where("grade_id", $id)->pluck("Name_Class", "id");

        return $list_classes;
    }

    //Get Sections
    public function Get_Sections($id)
    {

        $list_sections = Section::where("class_id", $id)->pluck("name", "id");
        return $list_sections;
    }

    public function store($request)
    {


        DB::beginTransaction();

        $name = ['en' => $request->name_en, 'ar' => $request->name_ar];
        $password = bcrypt($request->password);

        try {
            $student = new Student();
            $student->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
            $student->email = $request->email;
            $student->password = Hash::make($request->password);
            $student->gender = $request->gender;
            $student->nationalitie_id = $request->nationalitie_id;
            $student->blood_id = $request->blood_id;
            $student->Date_Birth = $request->Date_Birth;
            $student->grade_id = $request->grade_id;
            $student->classroom_id = $request->classroom_id;
            $student->section_id = $request->section_id;
            $student->parent_id = $request->parent_id;
            $student->academic_year = $request->academic_year;
            $student->save();

            // insert img
            if ($request->hasfile('photos')) {
                foreach ($request->file('photos') as $file) {   
                    $student->addMediaFromRequest($file)->toMediaCollection('images');
                }
            }

            $url = URL::to('/');
            $data['url'] = $url;
            $data['name'] = $name;
            $data['email'] = $request->email;
            $data['password'] = $password;
            $data['title'] = 'Student Registration on board system';

            Mail::send('registrationMail', ['data' => $data], function ($message) use ($data) {
                $message->to($data['email'])->subject($data['title']);
            });

            DB::commit(); // insert data



            toastr()->success(trans('messages.success'));
            return to_route('admin.student.create');

        } catch (Exception $e) {
            report($e);
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function Delete_Student($request)
    {

        Student::destroy($request->id);
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('admin.student.index');
    }

    public function Upload_attachment($request)
    {
        $student = Student::whereId($request->student_id)->firstOrFail();
        if ($request->hasfile('photos')) {
            foreach ($request->file('photos') as $file) {   
                $student->addMediaFromRequest($file)->toMediaCollection('images');
            }
        }
        toastr()->success(trans('messages.success'));
        return redirect()->route('admin.student.show', $request->student_id);
    }

    public function Download_attachment($studentsname, $filename)
    {
        return response()->download(public_path('attachments/students/' . $studentsname . '/' . $filename));
    }

    public function Delete_attachment($request)
    {
        // Delete img in server disk
        // Storage::disk('upload_attachments')->delete('attachments/students/' . $request->student_name . '/' . $request->filename);

        // Delete in data
        Image::where('id', $request->id)->where('filename', $request->filename)->delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('admin.student.show', $request->student_id);
    }


}
