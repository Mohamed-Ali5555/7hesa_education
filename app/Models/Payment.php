<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $table = 'payments';

    public function package()
    {
        return $this->belongsTo('App\Models\package', 'package_id');
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'student_id','id');
    }
    // public function student()
    // {
        
    //     return $this->hasMany('App\Models\Student', 'id');
    // }

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id','id');
    }
}
