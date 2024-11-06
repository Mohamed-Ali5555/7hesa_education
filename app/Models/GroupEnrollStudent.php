<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupEnrollStudent extends Model
{
    use HasFactory;
    public $table = 'group_enroll_students';

    protected $guarded = [];

}
