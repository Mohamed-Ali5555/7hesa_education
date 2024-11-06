<?php

namespace App\Models;

use App\Enums\Gender;
use App\Traits\ModelLogger;
use App\Traits\SaveModelNumber;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Notifications\Notifiable;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable implements HasMedia
{
    use InteractsWithMedia, HasTranslations;
    use Notifiable, ModelLogger, SaveModelNumber;
    protected $cast = [
        'gender' => Gender::class
    ];

    public $translatable = ['name'];
    protected $guarded = [];
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('avatars')
            ->singleFile()
            ->onlyKeepLatest(1)
            ->useFallbackUrl('/images/users/user.png')
            ->useFallbackPath(asset('/images/users/user.png'));
    }
    public function getAvatarAttribute()
    {
        return $this->getFirstMediaUrl('avatars');
    }

    public function getPrefixForSignUp(): string
    {
        return "teacher_id";
    }
    public function getKeyNameForSignUp(): string
    {
        return "teacher_id";
    }


    // علاقة بين المعلمين والتخصصات لجلب اسم التخصص
    public function specializations()
    {
        return $this->belongsTo(Specialization::class, 'Specialization_id','id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }
    public function admin_package()
    {
        return $this->belongsTo(Admin_package::class, 'admin_package_id', 'id');
    }
    public function exams()
    {
        return $this->hasMany(Quizze::class, 'teacher_id', 'id');
    }
    public function groups()
    {
        return $this->hasMany(Group::class, 'teacher_id', 'id');
    }



    // علاقة المعلمين مع الاقسام
    public function sections()
    {
        return $this->belongsToMany(Section::class, TeacherSection::class,'teacher_id','section_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'teacher_id','id');
    }
    public function sections_test()
    {
        return $this->belongsTo(Section::class, 'section_id','id');
    }


 
}
