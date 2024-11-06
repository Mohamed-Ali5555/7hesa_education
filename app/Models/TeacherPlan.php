<?php

namespace App\Models;

use App\Traits\BelongsToTeacher;
use Laravelcm\Subscriptions\Models\Plan;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherPlan extends Plan
{
    use HasFactory, BelongsToTeacher;
    public $translatable = ['name'];
}
