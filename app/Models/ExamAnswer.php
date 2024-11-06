<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelLogger;


class ExamAnswer extends Model
{
    use HasFactory, ModelLogger;

    protected $fillable = [
        'attempt_id',
        'question_id',
        'answer_id',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class,'question_id', 'id');
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class, 'answer_id', 'id');
    }
}
