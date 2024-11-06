<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\OnlineClass;
use Jubaer\Zoom\Facades\Zoom;
use App\Http\Controllers\Controller;
use App\Traits\MeetingZoomTrait;
use App\Notifications\OnlineSessoinCreated;
use Illuminate\Support\Facades\Notification;
use App\Services\AgoraService; // Ensure this path is correct
use Auth;
class OnlineZoomClassesController extends Controller
{
    use MeetingZoomTrait;
    protected $agoraService;

    public function __construct(AgoraService $agoraService)
    {
        $this->agoraService = $agoraService;
    }

 
    public function index()
    {
        $online_classes = OnlineClass::get();
        return view('admin.pages.online_classes.index', compact('online_classes'));
    }


    public function create()
    {
        $grades = Grade::get();
        return view('admin.pages.online_classes.add', compact('grades'));
    }

    public function indirectCreate()
    {
        $grades = Grade::get();
        return view('admin.pages.online_classes.indirect', compact('grades'));
    }

    public function store(Request $request)
    {

        $meeting = Auth::user()->getUserMeetingInfo()->first();

        if (!isset($meeting->id)) {
            $name = $request->topic;
            $meetingData = $this->agoraService->createAgoraProject($name);

            if (isset($meetingData->project->id)) {
                $meeting = new OnlineClass();
                $meeting->teacher_id = auth('teacher')->user()->id;
                $meeting->topic = $request->topic;
                $meeting->grade_id = $request->grade_id;
                $meeting->classroom_id = $request->classroom_id;
                $meeting->duration = $request->duration;
                $meeting->uid = $request->uid;
                $meeting->save();
            } else {
                echo "Project not created";
            }
        }

        $token = $this->agoraService->createToken($meeting->app_id, $meeting->appcertificate, $meeting->topic);

        $meeting->join_url = $this->agoraService->generateRandomString();
        $meeting->save();

        return $token;
    //     $channelName = $request->input('topic');

    //     $uid = rand(999, 1999); // Unique user ID for the meeting
    //     $expireTimeInSeconds = $request->input('duration') * 60; // Duration in seconds
    //     $expireTime = now()->addSeconds($expireTimeInSeconds);
    
    //     // Generate Agora token
    //     $tokenInfo = $this->agoraService->generateToken($channelName, $uid, 'publisher', $expireTimeInSeconds);
    // return $tokenInfo;
    //     if (isset($tokenInfo['error'])) {
    //         return response()->json(['error' => 'Failed to create meeting. Please try again later.'], 500);
    //     }
    
    //     // Generate join URL
    //     $joinUrl = route('join-meeting', ['channelName' => $channelName, 'uid' => $uid]);

    //     $startUrl = route('start-meeting', ['channelName' => $channelName, 'uid' => $uid]);



        ####################################################
      $meeting = Auth::user()->getUserMeetingInfo()->first();
// return  $meeting ;
        if(!isset($meeting->id)){
                $name = $request->topic; // that == name in form
                $meetingData = $this->createAgoraProject($name);
                if(isset($meetingData->project->id)){
                $meeting = new OnlineClass();
                $meeting->teacher_id =  auth('teacher')->user()->id;
                $meeting->topic = $request->topic;
                $meeting->grade_id = $request->grade_id;
                $meeting->classroom_id = $request->classroom_id;
                $meeting->duration = $request->duration;
                $meeting->uid = $request->uid;
                $meeting->save();

        }else{
        echo "project not created";
        }
 }
        $token =  $this->agoraService->createToken($meeting->app_id,$meeting->appcertificate,$meeting->topic);
      
        // $meeting->token = $token;
        $meeting->join_url = $this->agoraService->generateRandomString();
        $meeting->save();
       
        return $token;
         # ##################################################
    // Save meeting details to database
    // $meeting = OnlineClass::create([
    //     'topic' => $channelName,
    //     'uid' => $uid,
    //     'token' => $tokenInfo['token'],
    //     'duration' => $request->duration,
    //     'join_url' => $joinUrl,
    //     'teacher_id' => auth('teacher')->user()->id,
    //     'grade_id' => $request->grade_id,
    //     'classroom_id' => $request->classroom_id,
    //     'start_url' =>  $startUrl,
   
    // ]);


                // $students = Student::where('grade_id', $request->grade_id)
                //     ->where('teacher_id', auth('teacher')->id())
                //     ->where('section_id', $request->section_id)
                //     ->where('classroom_id', $request->classroom_id)
                //     ->get();

                // Notification::send(
                //     $students,
                //     new OnlineSessoinCreated(
                //         auth('teacher')->user()->name,
                //         $onlineClass->start_time
                //     )
                // );

                toastr()->success(trans('messages.success'));
                return redirect()->route('online_sessions.index');



        // try {
        //     $meeting = $this->createMeeting($request);
        //     if($meeting['status']){
        //         $onlineClass = OnlineClass::create([
        //             'integration' => true,
        //             'grade_id' => $request->grade_id,
        //             'classroom_id' => $request->classroom_id,
        //             'section_id' => $request->section_id,
        //             'created_by' => auth()->user()->email,
        //             'topic' => $request->topic,
        //             'start_at' => $request->start_time,
        //             'meeting_id' => $meeting['data']['id'],
        //             'duration' => $meeting['data']['duration'],
        //             'password' => $meeting['data']['password'],
        //             'start_url' => $meeting['data']['start_url'],
        //             'join_url' => $meeting['data']['join_url'],
        //         ]);
        //         // $students = Student::where('grade_id',$request->grade_id)->where('section_id',$request->section_id)->where('classroom_id',$request->classroom_id)->get();

        //         // Notification::send($students, new OnlineSessoinCreated(
        //         //     auth('teacher')->user()->name,
        //         //     $request->start_time
        //         // ));

        //         toastr()->success(trans('messages.success'));
        //         return redirect()->route('online_sessions.index');
        //     }
        // } catch (\Exception $e) {
        //     // throw $e;
        //     return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        // }
    }

    public function storeIndirect(Request $request)
    {
        try {
            // OnlineClass::create([
            //     'integration' => false,
            //     'grade_id' => $request->grade_id,
            //     'classroom_id' => $request->classroom_id,
            //     'section_id' => $request->section_id,
            //     // 'created_by' => auth()->user()->email,
            //     'meeting_id' => $request->meeting_id,
            //     'topic' => $request->topic,
            //     'start_at' => $request->start_time,
            //     'duration' => $request->duration,
            //     'password' => $request->password,
            //     'start_url' => $request->start_url,
            //     'join_url' => $request->join_url,
            // ]);
            // toastr()->success(trans('messages.success'));
            // return redirect()->route('online_sessions.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function destroy(Request $request,$id)
    {
        try {

            // $info = OnlineClass::find($id);

            // if($info->integration){
            //     $meeting = Zoom::getMeeting($request->meeting_id);
            //     if($meeting['status']){
            //         Zoom::deleteMeeting($request->meeting_id);
            //     }
            // }
            // OnlineClass::destroy($id);

            // toastr()->success(trans('messages.Delete'));
            // return redirect()->route('online_sessions.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
