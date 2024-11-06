<?php

namespace App\Http\Controllers\Student;
use App\Models\Group;

use App\Models\GroupEnrollStudent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Student\Group\GroupService;

class GroupController extends Controller
{
    public function __construct(
        public GroupService $groupService
    ) {
    }
    public function enrolled()
    {
        $groups = Group::whereHas('enrolledStudents',function ($q){
            $q->where('user_id',auth('student')->user()->id);
        })->get();
        return view('');
    }
    public function show(Group $group)
    {
        $studentJoined = $this->groupService->checkStudentIsJoined(
            $group,
            auth('student')->user()
        );
        if (! $studentJoined) {
            toastError("عفواً انت غير مسجل في الجروب");
            return to_route('student.dashboard.groups.show', $group->id);

        }
        // $group = Group::where()->first(); 
    }
    public function join(Group $group)
    {
        // return $group;
        $studentJoined = $this->groupService->checkStudentIsJoined($group, auth('student')->user());
        // return $studentJoined;
      
      $check_limit = GroupEnrollStudent::where('group_id',$group->id)->count();

   
      if ($studentJoined) {
        toastError("انت مسجل مسبقا في الجروب");
        // return to_route('student.dashboard.groups.show', $group->id);
        return \redirect()->back();
    }

    //   return  $check_limit;
      
    if($check_limit >= $group->limit_student){ 
        toastError("لا يسمح بالدخول لاكتمال المجموعه");
        // return to_route('student.dashboard.groups.show', $group->id);
        return \redirect()->back();
      }
      
        
    
        $this->groupService->join(
            $group,
            auth('student')->user()
        );



      
        // return true;
        toastSuccess("لقد سجلت في هذا الجروب بنجاح");
            // return to_route('student.dashboard.groups.show', $group->id);
            return \redirect()->back();
        // $group->
    }
}
