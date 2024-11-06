<?php
namespace App\Services\Student\Group;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class GroupService
{

    public function checkStudentIsJoined(Group $group, Student $student)
    {
        
        // dd($group->enrolledStudents()->where('group_enroll_students.student_id', $student->id)->exists());
    
        return $group->enrolledStudents()->where('group_enroll_students.student_id', $student->id)->exists();
    }

    // public function checkStudentIsJoined(Group $group, Student $student)
    // {
    //     // Check if the student is already enrolled in the group
    //     dd($isJoined = $group->enrolledStudents()->where('group_enroll_students.student_id', $student->id)->exists());
        
    //     // You can remove the dd() statement if you don't want to debug
    //     return $isJoined;
    // }
    public function join(Group $group, Student $student)
    {
        return $group->enrolledStudents()->syncWithoutDetaching($student->id);
    }
}