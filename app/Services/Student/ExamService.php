<?php
namespace App\Services\Student;

use App\Models\Quizze;
use App\Models\Student;
use App\Models\ExamAttempt;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Carbon;

class ExamService
{
    private $student;
    private $exam;

    public function __construct(
        private readonly Quizze $quizModel,
        private readonly ExamAttempt $examStudentModel,
    ) {

    }
    public function setStudent(Student|Authenticatable $student)
    {
        if ($student instanceof Student) {
            $this->student = $student;
        }
        return $this;
    }
    public function setExam(Quizze $quizze)
    {
        if ($quizze instanceof $this->quizModel) {
            $this->exam = $quizze;
        }
        return $this;

    }
    public function findExam($id)
    {
        return $this->quizModel->whereId($id)->first();
    }

    public function studentLeftTimeToStopExam($examId, $studentId)
    {
        $studentExam = $this->examStudentModel->where('student_id',$studentId)->where('exam_id',$examId)->first();
        $exam = $this->findExam($examId);
        
        $formatTime = explode(":", $exam->time);

        $examStartedAt = Carbon::parse($studentExam->started_at);

        $examEndTime = $examStartedAt->copy()->addHours($formatTime[0])->addMinutes($formatTime[1])->addSeconds($formatTime[2]);

        $remainingTime = $examEndTime->diff(now());

        return [
            $remainingTime->h,
            $remainingTime->i,
            $remainingTime->s
        ];
    }
    public function studentCantAccessExam($examId, $studentId):bool
    {
        $studentExam = $this->examStudentModel->where('exam_id', $examId)->whereNull('submitted_at')->where('student_id', $studentId)->firstOrFail();
        if($studentExam->exists()){
            $formatTime = explode(":", $this->exam->time);
    
            $examStartedAt = Carbon::parse($studentExam->started_at);
    
            $examEndTime = $examStartedAt->copy()->addHours($formatTime[0])->addMinutes($formatTime[1])->addSeconds($formatTime[2]);
            return ! is_null($studentExam->submitted_at) || $examEndTime->isPast();
        }

        return false;
    }

    public function studentStartExam()
    {
        return $this->examStudentModel->firstOrCreate([
            'exam_id' => $this->exam->id,
            'student_id' => $this->student->id,
        ],[
            'exam_time' => $this->exam->time,
            'started_at' => now()->toDateTimeString(),
        ]);
    }
}