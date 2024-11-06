<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelLogger;

class Library extends Model
{
    use ModelLogger;
    protected $table="library";

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }


    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom', 'classroom_id');
    }

    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }


}
