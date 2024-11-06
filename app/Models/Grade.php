<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\ModelLogger;

class Grade extends Model
{

    use HasTranslations,ModelLogger;
    public $translatable = ['Name'];

    protected $fillable=['Name','Notes'];


    // علاقة المراحل الدراسية لجلب الاقسام المتعلقة بكل مرحلة
    public function Sections()
    {
        return $this->hasMany('App\Models\Section', 'grade_id');
    }

}