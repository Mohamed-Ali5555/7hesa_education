<?php

namespace App\Models;

use App\Traits\ModelLogger;

use App\Traits\BelongsToTeacher;
use Spatie\MediaLibrary\HasMedia;
use App\Traits\SaveModelNumber;
use Illuminate\Notifications\Notifiable;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable implements HasMedia
{
    use SoftDeletes, Notifiable, HasTranslations, ModelLogger, SaveModelNumber;

    use InteractsWithMedia;
  
    // public function getPrefix(): string{
    //     return "S-";
    // }
    // public function getKeyName(): string{
    //     return "student_id";
    // }



    public $translatable = ['name'];

    protected $guarded = [];

    public function getPrefixForSignUp(): string
    {
        return "S-";
    }
    public function getKeyNameForSignUp(): string
    {
        return "student_id";
    }
    // علاقة بين الطلاب والمراحل الدراسية لجلب اسم المرحلة في جدول الطلاب

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }


    // علاقة بين الطلاب الصفوف الدراسية لجلب اسم الصف في جدول الطلاب

    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom', 'classroom_id');
    }
    // علاقة بين الطلاب الاقسام الدراسية لجلب اسم القسم  في جدول الطلاب
    // علاقة بين جدول الطلاب وجدول الحضور والغياب
    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'student_id');
    }
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'student_id');
    }
    public function packages()
    {
        return $this->hasMany(Package::class, 'teacher_id');
    }
    public function groups() {
        return $this->belongsToMany(Group::class, 'group_enroll_students');
    }

}
