<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\ModelLogger;

class Classroom extends Model
{

    use HasTranslations,ModelLogger;
    public $translatable = ['Name_Class'];

    protected $fillable=['Name_Class','grade_id'];


    // علاقة بين الصفوف المراحل الدراسية لجلب اسم المرحلة في جدول الصفوف

    public function grades()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

}
