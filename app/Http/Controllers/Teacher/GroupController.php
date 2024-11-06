<?php

namespace App\Http\Controllers\Teacher;

use Carbon\Carbon;
use App\Models\Day;
use App\Models\Grade;
use App\Models\Group;
use App\Models\GroupDayTime;
use Illuminate\Http\Request;
use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Classroom;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::with('class')->withCount('enrolledStudents')->get();

        return view('teacher.pages.groups.index', compact('groups'));
    }

    public function create()
    {
        $grades = Grade::get();
        $days = Day::get();

        return view('teacher.pages.groups.create', compact('grades', 'days'));
    }

    public function store(Request $request)
    {
        #TODO Request Validation For The Submitted Data 
        // dd(
        //     $days
        // );
        // return $request->all();

        DB::transaction(function () use ($request) {
            $days = explode(",", $request->days);
            $group = Group::create([

                'grade_id' => $request->grade_id,
                'class_id' => $request->classroom_id,
                'name' => $request->name,
                'visibility' => $request->visibility,
                'start_at' => $request->start_date,
                'end_at' => $request->end_date,
                'status' => true,
                'limit_student' => $request->limit_student,

            ]);

            $group->days()->syncWithoutDetaching($days);
        });
        toastr()->success(trans('messages.success'));
        return redirect()->route('teacher.groups.index');

    }

    public function settings(Group $group)
    {
        $group->load('days','times');
        $grades = Grade::get();
        $times = generateDayAsTime();

        return view('teacher.pages.groups.settings', compact('grades', 'group', 'times'));
    }
    public function timeUpdate(Request $request, Group $group)
    {
        // dd(
        //     $request->all()
        // );
        $startTime = Carbon::createFromFormat('h:i A', $request->start)->format('H:i:s');
        $endTime = Carbon::createFromFormat('h:i A', $request->end)->format('H:i:s');

        GroupDayTime::updateOrCreate(['group_day_id'=>$request->group_day_id],[
            'start_time' => $startTime,
            'end_time' => $endTime,
        ]);
        toastr()->success(trans('messages.success'));

        return redirect()->back();
        // dd(
        //     $group,
        //     $request->all()
        // );
    }
    public function edit($group)
    {
        $group = Group::whereId($group)->firstOrFail();
        $grades = Grade::get();
        $days = Day::all(); // Assuming you have a Day model or similar
        $class_rooms = Classroom::get();

        return view('teacher.pages.groups.edit', compact('grades', 'group','days','class_rooms'));
    }
 public function update(Request $request, Group $group)
{
  
    // Validate the submitted data
    $request->validate([
        'grade_id' => 'required|exists:grades,id',
        'class_id' => 'required|exists:classrooms,id',
        'name' => 'required|string|max:255',
        'visibility' => 'required|in:private,public',
        'start_at' => 'required|date',
        'end_at' => 'nullable|date|after_or_equal:start_date',
        'limit_student' => 'nullable|integer|min:1',
        'days' => 'required|string', // since you're passing comma-separated values
    ]);

    try {
        // Start database transaction
        DB::transaction(function () use ($request, $group) {
            // Explode the string to get an array of days
            $days = explode(",", $request->days);

            // Update the group details
            $group->update([
                'grade_id' => $request->grade_id,
                'class_id' => $request->class_id,
                'name' => $request->name,
                'visibility' => $request->visibility,
                'start_at' => $request->start_at,
                'end_at' => $request->end_at,
                'status' => true,
                'limit_student' => $request->limit_student,
            ]);

            // Sync the new days without removing existing ones
            $group->days()->syncWithoutDetaching($days);
            

            // If you want to detach days that are no longer in the array, you can do:
            $group->days()->sync($days); // This will remove any days not in the $days array

            // Optionally, if you want to remove some specific days not in the new array
            // $group->days()->detach($daysToRemove);
        });

        // Show success message and redirect
        toastr()->success(trans('messages.success'));
        return redirect()->route('teacher.groups.index');
    } catch (\Exception $e) {
        // Handle error and rollback
        toastr()->error(trans('messages.error'));
        return redirect()->back()->withInput();
    }
}



    public function destroy(Request $request, $group)
    {
        try {

            $group = Group::findOrFail($group);
            $group->delete();
            toastr()->success(trans('messages.Delete'));
            return redirect()->route('online_sessions.index');
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
