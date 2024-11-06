<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelLogger;

class Question extends Model
{
    use ModelLogger;

    protected $guarded = [];
    public function quizze()
    {
        return $this->belongsTo(Quizze::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class,'question_id', 'id');
    }
}
