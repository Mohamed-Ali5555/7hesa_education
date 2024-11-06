<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelLogger;

class Degree extends Model
{
    use ModelLogger;
    protected $guarded = [];
    public $timestamps = true;

    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'student_id');
    }


}
