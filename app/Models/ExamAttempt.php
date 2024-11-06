<?php

namespace App\Models;

use App\Traits\ModelLogger;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExamAttempt extends Model
{
    use HasFactory, ModelLogger;
    // public $table = 'exam_attempts';
    protected $guarded = [];
    protected $appends = ['still_in_progress'];

    public function quizze()
    {
        return $this->belongsTo(Quizze::class, 'exam_id', 'id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
    public function answers()
    {
        return $this->hasMany(ExamAnswer::class,'attempt_id');
    }
    public function getStillInProgressAttribute()
    {
        $formatTime = explode(":", $this->exam_time);
        $examEndTime = Carbon::parse($this->started_at)->copy()->addHours($formatTime[0])->addMinutes($formatTime[1])->addSeconds($formatTime[2]);
        return ! $examEndTime->isPast() && empty($this->submitted_at);
    }
}
