<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelLogger;

class package extends Model
{
    use ModelLogger;
    public $table = 'teacher_packages';

    protected $guarded = [];

     public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }
    public function class_room()
    {
        return $this->belongsTo('App\Models\Classroom', 'classroom_id');
    }
}
