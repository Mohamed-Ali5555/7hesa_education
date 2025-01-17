<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\ModelLogger;
class Section extends Model
{
    use HasTranslations,ModelLogger;
    public $translatable = ['name'];
    protected $fillable=['name','grade_id','class_id'];

    protected $table = 'sections';
    public $timestamps = true;


    // علاقة بين الاقسام والصفوف لجلب اسم الصف في جدول الاقسام

    public function My_classs()
    {
        return $this->belongsTo('App\Models\Classroom', 'class_id');
    }

    // علاقة الاقسام مع المعلمين
    public function teachers()
    {
        return $this->belongsToMany('App\Models\Teacher','teacher_section','section_id','teacher_id');
    }

    public function grades()
    {
        return $this->belongsTo('App\Models\Grade','grade_id');
    }

}
