<?php

namespace App\Http\Controllers\Student;

use App\Models\{
    Quizze,
    ExamAnswer,
    ExamAttempt
};

use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Services\Student\ExamService;
use Exception;

class ExamsController extends Controller
{

    public function __construct(
        private readonly ExamService $examService
    ) {
    }
    public function index()
    {
        // $students = Student::where('id', auth()->user()->id)->get();
           $quizzes = Quizze::where('grade_id', auth('student')->user()->grade_id)
            ->where('classroom_id', auth('student')->user()->classroom_id)
            ->where('section_id', auth('student')->user()->section_id)
            ->whereHas('package', function ($query) {
                $query->whereIn('id', function ($subQuery) {
                    $subQuery->select('package_id')
                        ->from('payments')
                        ->where('student_id', auth('student')->id());
                });
            })
            ->with('studentDegree')
            ->latest('id')
            ->get();



        return view('students.pages.exams.index', compact('quizzes'));

    }
    public function saveAnswer($quizze_id, Request $request)
    {
        if ($request->ajax()) {

            $studentId = auth('student')->id();

            $key = "user_{$studentId}_exm_{$quizze_id}";

            $examAnswers = cache()->get($key,[]);

            $examAnswers[$request->question_id] = $request->answer_id;

            cache()->put($key, $examAnswers, now()->addWeek());

            return response()->json([
                'success' => true,
                'msg' => "Saved",
            ]);
        }
    }

    public function store(Request $request)
    {
        $examAttempt = ExamAttempt::where('exam_id', $request->exam_id)->with('quizze.questions.answers')->whereNull('submitted_at')->where('student_id', auth('student')->id())->firstOrFail();

        $submittedAt = now();
        $minutes = $submittedAt->diffInMinutes($examAttempt->started_at);

        try {
            DB::beginTransaction();
            foreach ($examAttempt->quizze->questions as $key => $question) {
                $answer = request()->input("answer_{$question->id}");
                if (! empty($answer) && $question->answers->firstWhere('id',$answer)) {
                    ExamAnswer::create([
                        'attempt_id' => $examAttempt->id,
                        'question_id' => $question->id,
                        'answer_id' => $answer
                    ]);
                }

            }

            $marks = $examAttempt->quizze->marks;
            $examAnswer = ExamAnswer::where('attempt_id', $examAttempt->id)->with('answer')->get();
            $totalMarks = 0;

            foreach ($examAnswer as $studentAnswer) {
                if ($studentAnswer->answer->is_correct == 1) {
                    $totalMarks += $marks;
                }
            }


            $examAttempt->update([
                'marks' => $totalMarks,
                'time_spent' => "$minutes",
                'submitted_at' => $submittedAt,
            ]);

            DB::commit();

            $studentId = auth('student')->id();
            cache()->delete("user_{$studentId}_exm_{$examAttempt->quizze->id}");

        } catch (Exception $e) {
            DB::rollBack();
            // throw $e;
            logger()->emergency("{$e->getMessage()}", $e->getTrace());
            
            toastr()->error("معذرة حدث خطأ الرجاء التوجه للاداره");

            return redirect()->route('student.dashboard.exams.index');
        }

        return redirect()->route('student.dashboard.exams.index');
    }


    public function start($quizze_id)
    {
        $exam = Quizze::whereId($quizze_id)->firstOrFail();

        $studentExam = $this->examService
            ->setStudent(auth('student')->user())
            ->setExam($exam)
            ->studentStartExam();

        $formatTime = explode(":", $exam->time);

        $examStartedAt = now()->parse($studentExam->started_at);

        $examEndTime = $examStartedAt->copy()->addHours($formatTime[0])->addMinutes($formatTime[1])->addSeconds($formatTime[2]);

        if (! $this->examService->studentCantAccessExam($exam->id, auth('student')->id())) {

            $tempUrl = URL::temporarySignedRoute('student.dashboard.exams.show', $examEndTime, ['student_exam' => $exam->id]);
            return redirect()->to($tempUrl);
        }
        toastr()->error("معذرة ليس لديك صلاحيه دخول للامتحان مره ثانيه");
        return to_route('student.dashboard.exams.index');
    }

    public function show($quizze_id)
    {
        $exam = Quizze::whereId($quizze_id)->with('questions.answers:id,question_id,answer')->firstOrFail();

        $this->examService
            ->setStudent(auth('student')->user())
            ->setExam($exam)
            ->studentStartExam();


        $remainingTime = $this->examService->studentLeftTimeToStopExam(
            $quizze_id,
            auth('student')->id()
        );

        if ($this->examService->studentCantAccessExam($exam->id, auth('student')->id())) {
            toastr()->error("معذرة ليس لديك صلاحيه دخول للامتحان مره ثانيه");
            return to_route('student.dashboard.exams.index');
        }


        $studentId = auth('student')->id();
        $key = "user_{$studentId}_exm_{$exam->id}";
        $selectedAnswers = cache()->get($key, []);

        return view('students.pages.exams.show', compact('exam', 'selectedAnswers', 'remainingTime'));
    }


    public function showAnswer(Request $request)
    {
        $examAttempt = ExamAttempt::whereId($request->id)->whereNotNull('submitted_at')->with('quizze.questions.answers','answers')->firstOrFail();

        return view('students.pages.exams.showanswer', compact('examAttempt'));
    }
}
