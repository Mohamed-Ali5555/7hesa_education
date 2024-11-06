<?php

namespace App\Models;

use App\Traits\ModelLogger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuestionExam extends Model
{
    use HasFactory, ModelLogger;
    public $timestamps =false;
    protected $fillable = [
        'exam_id',
        'question_id'
    ];

    public function question()
    {
        return $this->hasMany(Question::class, 'id', 'question_id');
    }
    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'question_id');
    }

}
