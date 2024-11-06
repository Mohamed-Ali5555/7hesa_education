<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quizze;
use Livewire\WithPagination;

use App\Services\Student\ExamService;

class ShowQuestion extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public Quizze $quiz;

    protected ExamService $examService;

    public function boot(ExamService $examService)
    {
        $this->examService = $examService;
    }


    public function render()
    {
        $this->examService
            ->setStudent(auth('student')->user())
            ->setExam($this->quiz);

        abort_if($this->examService->studentCantAccessExam($this->quiz->id, auth('student')->id()), 404);

        $questions = $this->quiz->questions()->with('answers:id,question_id,answer')->get();

        $studentId = auth('student')->id();
        $key ="user_{$studentId}_exm_{$this->quiz->id}";
        $selectedAnswers = cache()->get($key) ?? [];

        if (! empty($questions)) {
            return view('livewire.show-question', ['questions' => $questions,'selectedAnswers' => $selectedAnswers]);
        }

        return view('livewire.empty-question');
    }


}
