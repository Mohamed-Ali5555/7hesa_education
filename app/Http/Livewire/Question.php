<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use Livewire\Component;

class Question extends Component
{
    public $question;
    public function saveAnswer($answerKey)
    {
        // $this->response = $this->player->respond($this->question, $answerKey);
        Answer::updateOrCreate([
            'quiz_id' => $this->quiz->id,
            'answerKey' => $answerKey,
        ]); 
        // event(new AnswerReceived($this->session, $this->response));
    }

    public function render()
    {
        return view('livewire.question');
    }
}
