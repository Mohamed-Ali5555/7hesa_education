<?php

namespace App\Http\Controllers\Teacher;

use Exception;
use App\Models\Grade;
use App\Models\Student;
use App\Models\package;
use App\Models\Classroom;
use App\Models\Section;
use App\Models\OnlineClass;
use Illuminate\Http\Request;
use Jubaer\Zoom\Facades\Zoom;
use Illuminate\Support\Carbon;
use App\Traits\MeetingZoomTrait;
use App\Settings\GeneralSettings;
use App\Http\Controllers\Controller;
use App\Notifications\OnlineSessoinCreated;
use Illuminate\Support\Facades\Notification;
use App\Services\AgoraService;
use Str;
use App\Models\Group;

class OnlineZoomClassesController extends Controller
{

    // protected $agoraService;

    // public function __construct(AgoraService $agoraService)
    // {
    //     $this->agoraService = $agoraService;
    // }


    use MeetingZoomTrait;
    public function index()
    {
        $online_classes = OnlineClass::where('teacher_id', auth('teacher')->user()->id)->get();

        return view('teacher.pages.online_classes.index', compact('online_classes'));
    }

    public function create()
    {
        $grades = Grade::get();
        $packages = package::get();

        return view('teacher.pages.online_classes.add', compact('grades','packages'));
    }
    public function edit($id)
    {
        $onlineClass = OnlineClass::whereId($id)->where('teacher_id', auth('teacher')->id())->firstOrFail();
        $grades = Grade::get();
        $packages = package::get();
        $class_rooms = Classroom::get();
        $groups = Group::get();

        return view('teacher.pages.online_classes.edit', compact('onlineClass','groups','class_rooms', 'grades','packages'));
    }
    public function update(Request $request, $id)
    {
        $OnlineClass = OnlineClass::whereId($id)->where('teacher_id', auth('teacher')->id())->firstOrFail();
      
            // Validate the input data
            $validatedData = $request->validate([
                'start_at' => 'required|date',
                'end_at' => 'required|date|after:start_at',
                'grade_id' => 'required',
                'package_id' => 'required',
                'classroom_id' => 'required',
                'group_id' => 'required',
                'topic' => 'required|string|max:255',
            ]);
        
            // Find the online class by ID
        
            // Update the online class with the validated data
            $OnlineClass->update([
                'topic' => $validatedData['topic'] ?? $OnlineClass->topic,
                'grade_id' => $validatedData['grade_id'],
                'package_id' => $validatedData['package_id'],
                'classroom_id' => $validatedData['classroom_id'],
                'group_id' => $validatedData['group_id'],
                'start_at' => $validatedData['start_at'],
                'end_at' => $validatedData['end_at'],
                'is_meeting_open' => $OnlineClass->is_meeting_open, // retain current state
                'is_active' => $OnlineClass->is_active, // retain current state
            ]);
            //   return $request->all();

            // Show success message and redirect back to the online sessions index
            toastr()->success(trans('messages.updated_successfully'));
            return redirect()->route('teacher.online_sessions.index');
       
        
    }
    public function indirectCreate()
    {
        $grades = Grade::get();
        return view('teacher.pages.online_classes.indirect', compact('grades'));
    }

    public function store(Request $request)
    {

// return $request->all();

        $validatedData = $request->validate([
            // 'title' => 'nullable|string|max:255',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after:start_time',
            'grade_id' => 'required',
            'package_id' => 'required',
            'classroom_id' => 'required',
            'group_id' => 'required',
            'topic' => 'required',

        ]);

        $jitsiLink = 'https://meet.jit.si/' . Str::random(10);

        $OnlineClass = OnlineClass::create([



            'integration' => true,
       
            'topic' =>  $request->topic,

          

            'grade_id' => $request->grade_id,
            'package_id' => $request->package_id,
            'classroom_id' => $request->classroom_id,
            'group_id' => $request->group_id,
            'teacher_id' =>auth('teacher')->id(),
    
            // 'title' => $validatedData['title'],
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
            'jitsi_link' => $jitsiLink,
            'is_active' => false,
            'teacher_id' => auth()->id(),
        ]);


        $students = Student::where('grade_id', $request->grade_id)
            // ->where('teacher_id', auth('teacher')->id())
            // ->where('group_id', $request->group_id)
            ->where('classroom_id', $request->classroom_id)
            ->get();

        // Notification::send(
        //     $students,
        //     new OnlineSessoinCreated(
        //         auth('teacher')->user()->name,
        //         $onlineClass->start_at
        //     )
        // );

        toastr()->success(trans('messages.success'));
        return redirect()->route('teacher.online_sessions.index');




     
    }

    public function storeIndirect(Request $request)
    {
       
        try {
            OnlineClass::create([
                'integration' => false,
                'grade_id' => $request->grade_id,
                'classroom_id' => $request->classroom_id,
                'section_id' => $request->section_id,
                'teacher_id' => auth('teacher')->user()->id,
                'meeting_id' => $request->meeting_id,
                'topic' => $request->topic,
                'start_at' => $request->start_time,
                'duration' => $request->duration,
                'password' => $request->password,
                'start_url' => $request->start_url,
                'join_url' => $request->join_url,
            ]);
            toastr()->success(trans('messages.success'));
            return redirect()->route('teacher.online_sessions.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function destroy(Request $request, $id)
    {
        try {

            $info = OnlineClass::find($id);

        
            OnlineClass::destroy($id);

            toastr()->success(trans('messages.Delete'));
            return redirect()->route('online_sessions.index');
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }



    public function showlink(OnlineClass $online_class)
    {

        return view('teacher.pages.online_classes.show', compact('online_class'));
    }

    public function openMeeting(OnlineClass $online_class)
    {
        $online_class->is_meeting_open = true;
        $online_class->save();
    
        return redirect()->route('teacher.online_sessions.showlink', $online_class)
                         ->with('status', 'Meeting is now open.');
    }
    
    public function closeMeeting(OnlineClass $online_class)
    {
        $online_class->is_meeting_open = false;
        $online_class->save();
    
        return redirect()->route('teacher.online_sessions.showlink', $online_class)
                         ->with('status', 'Meeting has been closed.');
    }

    public function activateLesson(OnlineClass $online_class)
    {
        // return auth()->user('teacher')->id();
        if ($online_class->teacher_id !== auth('teacher')->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $online_class->update(['is_active' => true]);
        toastr()->success(trans('messages.success'));
        return redirect()->route('teacher.online_sessions.index');

    }

}
