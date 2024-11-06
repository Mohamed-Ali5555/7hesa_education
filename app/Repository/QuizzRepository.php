<?php

namespace App\Repository;

use App\Interfaces\QuizzRepositoryInterface;

use App\Models\{
    Grade,
    Quizze,
    Subject,
    Teacher,
};

class QuizzRepository implements QuizzRepositoryInterface
{

    public function index()
    {
        $quizzes = Quizze::paginate();
        return view('admin.pages.Quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        $data['grades'] = Grade::get();
        $data['subjects'] = Subject::get();
        $data['teachers'] = Teacher::get();
        return view('admin.pages.Quizzes.create', $data);
    }

    public function store($request)
    {
        try {

            Quizze::create([
                'name' => ['en' => $request->Name_en, 'ar' => $request->Name_ar],
                'subject_id' => $request->subject_id,
                'grade_id' => $request->grade_id,
                'classroom_id' => $request->classroom_id,
                'section_id' => $request->section_id,
                'teacher_id' => $request->teacher_id,
            ]);

            toastr()->success(trans('messages.success'));
            return redirect()->route('Quizzes.create');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }



    public function edit($id)
    {
        $quizz = Quizze::findorFail($id);
        $data['grades'] = Grade::get();
        $data['subjects'] = Subject::get();
        $data['teachers'] = Teacher::get();
        return view('admin.pages.Quizzes.edit', $data, compact('quizz'));
    }

    public function update($request)
    {
        try {
            $quizz = Quizze::findOrFail($request->id);
            $quizz->update([
                'name' => ['en' => $request->Name_en, 'ar' => $request->Name_ar],
                'subject_id' => $request->subject_id,
                'grade_id' => $request->grade_id,
                'classroom_id' => $request->classroom_id,
                'section_id' => $request->section_id,
                'teacher_id' => $request->teacher_id,
            ]);
            toastr()->success(trans('messages.Update'));
            return redirect()->route('Quizzes.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            Quizze::destroy($request->id);
            toastr()->error(trans('messages.Delete'));
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
