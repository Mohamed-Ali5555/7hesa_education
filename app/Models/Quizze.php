<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\ModelLogger;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quizze extends Model
{
    use HasTranslations, ModelLogger, SoftDeletes;
    protected $guarded = [];
    public $translatable = ['name'];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }



    public function subject()
    {
        return $this->belongsTo('App\Models\Subject', 'subject_id');
    }
    public function package()
    {
        return $this->belongsTo(package::class, 'package_id');
    }

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }


    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom', 'classroom_id');
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class, QuestionExam::class, 'exam_id', 'question_id');
    }


    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }


    public function degree()
    {
        return $this->hasMany(ExamAttempt::class, 'exam_id');
    }
    public function studentDegree()
    {
        return $this->hasOne(ExamAttempt::class, 'exam_id')->where('student_id', auth('student')->id());
    }
    public function attempts()
    {
        return $this->hasMany(ExamAttempt::class, 'exam_id');
    }
}
