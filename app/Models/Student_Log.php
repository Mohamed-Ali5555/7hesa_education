<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Log extends Model
{
    use HasFactory;
    public $table = 'student_logs';

    protected $guarded = [];
}
