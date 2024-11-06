<?php

namespace App\Http\Controllers\Teacher;

use App\Enums\QuestionLevel;
use App\Http\Controllers\Controller;
use App\Models\{
    Answer,
    Question,
    QuestionExam,
    Quizze
};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{

    public function store(Request $request)
    {
        $quiz = Quizze::whereId($request->quizz_id)->firstOrFail();
        try {
            DB::beginTransaction();

            $questionId = Question::create([
                'title' => $request->title,
                'description' => $request->desc,
                'level' => $request->level,

                'subject_id' => $quiz->subject_id,
                'grade_id' => $quiz->grade_id,
                'teacher_id' => auth('teacher')->id(),

            ])->id;

            foreach ($request->answers as $index => $answer) {
                Answer::create([
                    'question_id' => $questionId,
                    'answer' => $answer['answer'],
                    'is_correct' => ($request->is_correct == $index) ? 1 : 0
                ]);
            }

            QuestionExam::create([
                'exam_id' => $request->quizz_id,
                'question_id' => $questionId,
            ]);
            toastr()->success(trans('messages.success'));

            DB::commit();
            return response()->json(['success' => true, 'msg' => 'تم اضافة السؤال بنجاح']);
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json(['success' => true, 'msg' => $e->getMessage()]);
        }


    }


    public function show($id)
    {
        $quizz_id = $id;
        $levels = QuestionLevel::values();
        return view('teacher.pages.Questions.create', compact('quizz_id', 'levels'));
    }


    public function edit($id)
    {
        $levels = QuestionLevel::values();

        $question = Question::findOrFail($id);
        return view('teacher.pages.Questions.edit', compact('question','levels'));
    }


    public function update(Request $request, $id)
    {
        try {
            $question = Question::findOrFail($id);
            $question->update([
                'title' => $request->title,
                'answers' => $request->answers,
                'right_answer' => $request->right_answer,
                'score' => $request->score,
            ]);

            toastr()->success(trans('messages.Update'));
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Quizze $quiz,Question $question)
    {

        try {
            $quiz->questions()->detach($question);

            toastr()->success(trans('messages.Delete'));
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
