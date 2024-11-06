<?php

namespace App\Http\Controllers\Teacher;

use Exception;
use App\Models\{
    Grade,
    Degree,
    Quizze,
    Subject,
    Question,
    ExamAttempt,
    package
};
use App\Enums\QuestionLevel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuizze;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuizzController extends Controller
{
    public function index()
    {
        $quizzes = Quizze::where('teacher_id', auth('teacher')->user()->id)->with('attempts:id,exam_id,time_spent')->get();
        return view('teacher.pages.Quizzes.index', compact('quizzes'));
    }

    public function questionBank()
    {
        $data['grades'] = Grade::get();
        $questions = Question::where([
            'teacher_id' => auth('teacher')->id(),
        ])->has('answers')
            ->select('level')
            ->get();


        $data['question'] = [
            'easy' => $questions->where('level', QuestionLevel::EASY->value)->count(),
            'medium' => $questions->where('level', QuestionLevel::MEDIUM->value)->count(),
            'hard' => $questions->where('level', QuestionLevel::HARD->value)->count(),
        ];

        $data['subjects'] = Subject::get();
        return view('teacher.pages.Quizzes.bank', $data);
    }

    public function questionBankStore(Request $request)
    {
        try {

            DB::beginTransaction();

            $quiz = Quizze::create([

                'name' => ['en' => $request->Name_en, 'ar' => $request->Name_ar],
                'marks' => $request->marks,
                'totalmarks' => $request->totalmarks,
                'time' => sprintf("%d:%02d", $request->hours, $request->minutes),  // استخدام الوقت المنسق

                'subject_id' => $request->subject_id,
                'grade_id' => $request->grade_id,
                'classroom_id' => $request->classroom_id,
                'section_id' => $request->section_id,
                'teacher_id' => auth('teacher')->id(),  // تأكيد أن المعلم الحالي هو الذي يدخل البيانات
            ]);
            $questions = Question::where([
                'subject_id' => $quiz->subject_id,
                'grade_id' => $quiz->grade_id,
                'teacher_id' => auth('teacher')->id(),
            ])->has('answers')
                ->select('id', 'level')
                ->get();

            $easyQs = $questions->where('level', QuestionLevel::EASY->value)->shuffle()->take($request->easy_qs_count)->pluck('id');
            $mediumQs = $questions->where('level', QuestionLevel::MEDIUM->value)->shuffle()->take($request->medium_qs_count)->pluck('id');
            $hardQs = $questions->where('level', QuestionLevel::HARD->value)->shuffle()->take($request->hard_qs_count)->pluck('id');

            $quiz->questions()->sync([
                ...$easyQs,
                ...$mediumQs,
                ...$hardQs,
            ]);

            toastr()->success(trans('messages.success'));
            DB::commit();
            return redirect()->route('teacher.quizzes.show', $quiz->id);

        } catch (Exception $e) {
            DB::rollback();
            // throw $e;   
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        // $data['grades'] = Grade::get();
        // $data['subjects'] = Subject::get();
        // return view('teacher.pages.Quizzes.bank', $data);
    }

    public function create()
    {
        $data['grades'] = Grade::get();
        $data['subjects'] = Subject::get();
        $data['packages'] = package::where('added_by',auth('teacher')->user()->id)->get();

        return view('teacher.pages.Quizzes.create', $data);
    }

    public function store(StoreQuizze $request)
    {
        try {
            $request->validated();

            $quiz = Quizze::create([

                'name' => ['en' => $request->Name_en, 'ar' => $request->Name_ar],
                'marks' => $request->marks,
                'totalmarks' => $request->totalmarks,
                'time' => sprintf("%d:%02d", $request->hours, $request->minutes),  // استخدام الوقت المنسق

                'subject_id' => $request->subject_id,
                'grade_id' => $request->grade_id,
                'classroom_id' => $request->classroom_id,
                'section_id' => $request->section_id,
                'teacher_id' => auth('teacher')->user()->id,  // تأكيد أن المعلم الحالي هو الذي يدخل البيانات
                'package_id' => $request->package_id,

          
            ]);


            toastr()->success(trans('messages.success'));
            return redirect()->route('teacher.quizzes.show', $quiz->id);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $quizz = Quizze::findorFail($id);
        $data['grades'] = Grade::get();
        $data['subjects'] = Subject::get();
        $data['packages'] = package::where('added_by',auth('teacher')->user()->id)->get();

        return view('teacher.pages.Quizzes.edit', $data, compact('quizz'));
    }

    public function show($id)
    {
        $quizz = Quizze::with('questions.answers')->findorFail($id);

        return view('teacher.pages.Questions.index', compact('quizz'));
    }


    public function update(Request $request)
    {

        try {
            $quizz = Quizze::findorFail($request->id);
            $quizz->name = ['en' => $request->Name_en, 'ar' => $request->Name_ar];
            $quizz->time = $request->time;
            $quizz->subject_id = $request->subject_id;
            $quizz->grade_id = $request->grade_id;
            $quizz->classroom_id = $request->classroom_id;
            $quizz->section_id = $request->section_id;
            $quizz->package_id = $request->package_id;

            
            $quizz->teacher_id = auth('teacher')->user()->id;
            $quizz->save();
            toastr()->success(trans('messages.Update'));
            return redirect()->route('teacher.quizzes.index');
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            Quizze::whereId($id)->firstOrFail()->delete();
            toastr()->success(trans('messages.Delete'));
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function student_quizze($quizze_id)
    {
        $degrees = ExamAttempt::with('student', 'quizze')->where('exam_id', $quizze_id)->get();
        return view('teacher.pages.Quizzes.student_quizze', compact('degrees'));
    }

    public function repeat_quizze(Request $request)
    {
        Degree::where('student_id', $request->student_id)->where('quizze_id', $request->quizze_id)->delete();
        toastr()->success('تم فتح الاختبار مرة اخرى للطالب');
        return redirect()->back();
    }

}
