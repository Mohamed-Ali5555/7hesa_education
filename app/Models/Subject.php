<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\ModelLogger;

class Subject extends Model
{
    use HasTranslations,ModelLogger;

    public $translatable = ['name'];

    // protected $fillable = ['name','grade_id','classroom_id','teacher_id'];
    protected $guarded = [];


    // جلب اسم المراحل الدراسية

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }

    // جلب اسم الصفوف الدراسية
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    // جلب اسم المعلم
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }
    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }


}
