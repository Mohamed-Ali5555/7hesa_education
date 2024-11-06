<?php

namespace App\Models;

use App\Enums\GroupVisibility;
use App\Traits\BelongsToTeacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasFactory, BelongsToTeacher, SoftDeletes;
    protected $guarded = [];
    protected $cast = [
        'visibility' => GroupVisibility::class
    ];


    public function class()
    {
        return $this->belongsTo(Classroom::class, 'class_id', 'id');
    }
    /**
     * The days that belong to the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function days(): BelongsToMany
    {
        return $this->belongsToMany(Day::class, GroupDay::class)->withPivot(['id'])->as('group_day');
    }
    public function times()
    {
        return $this->hasManyThrough(GroupDayTime::class, GroupDay::class);
    }
    // public function enrolledStudents(): BelongsToMany
    // {
    //     return $this->belongsToMany(Student::class, GroupEnrollStudent::class, 'group_id', 'student_id', 'id', 'id');
    // }
    public function enrolledStudents(): BelongsToMany
    {
        // Assuming the pivot table is named 'group_enroll_student'
        return $this->belongsToMany(Student::class, 'group_enroll_students', 'group_id', 'student_id');
    }
    // public function enrolledStudents(): BelongsToMany
    // {
    //     return $this->belongsToMany(Student::class, 'group_enroll_students', 'student_id', 'group_id');
    // }
    
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id','id');
    }
}

// select exists(select * from `students` inner join `group_enroll_students` on `students`.`student_id` = `group_enroll_students`.`id` where `group_enroll_students`.`group_id` is null and `student_id` = 1 and `students`.`deleted_at` is null) as `exists`
// select exists(select * from `students` inner join `group_enroll_students` on `students`.`id` = `group_enroll_students`.`id` where `group_enroll_students`.`group_id` is null and `student_id` = 1 and `students`.`deleted_at` is null) as `exists`

// ---
// select exists(select * from `students` inner join `group_enroll_students` on `students`.`student_id` = `group_enroll_students`.`id` where `group_enroll_students`.`group_id` = 1 and `student_id` = 1 and `students`.`deleted_at` is null) as `exists`