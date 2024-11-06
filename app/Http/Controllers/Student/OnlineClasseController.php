<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\OnlineClass;
use App\Models\package;
use App\Models\Payment;
use Carbon\Carbon;
class OnlineClasseController extends Controller
{
    public function index()
    {
       
       
        $studentId = auth('student')->user()->id;

        $currentDate = Carbon::now();

        // استرجاع معرفات الباقات التي اشترك فيها الطالب بالفعل والتي لا تزال نشطة
        $activeSubscribedPackageIds = Payment::where(['student_id'=> $studentId,'payment_status'=>1])
        ->whereHas('package', function($query) use ($currentDate) {
            $query->where('end_at', '>=', $currentDate);
        })
        ->pluck('package_id')
        ->toArray();


        //     return   $activeSubscribedPackageIds;
        // استرجاع التاريخ الحالي
        // استرجاع الباقات التي أضافها المدرس والتي لم يشترك بها الطالب
        $packages = Package::where(['status'=>1])
                        ->whereIn('id', $activeSubscribedPackageIds)
                        ->where('start_at', '<=', $currentDate)
                        ->where('end_at', '>=', $currentDate)
                        ->get();



                // return $packages;
        // $online_classes = OnlineClass::where('grade_id', auth('student')->user()->grade_id)->whereDate('start_at',now()->toDateString())->where('classroom_id', auth('student')->user()->classroom_id)->where('grade_id', auth('student')->user()->grade_id)->get();
   
        return view('students.pages.online_classes.index', compact('packages'));
    }

    // get all courses that class room == same class room and grade = same grade that i have
    public function courses($id){
        // $online_classes = OnlineClass::get();
        // return  $online_classes ;

        // return auth('student')->user()->classroom_id;
        $online_classes = OnlineClass::where('grade_id', auth('student')->user()->grade_id)
        ->where(['package_id'=>$id])
        // ->whereDate('start_at', now()->toDateString())

        ->where('classroom_id', auth('student')->user()->classroom_id)->where('grade_id', auth('student')->user()->grade_id)->get();
        // return  $online_classes ;

        return view('students.pages.online_classes.courses', compact('online_classes'));

    }

    public function joinLesson(OnlineClass $online_classe)
    {
        // Check if the online class is active and the meeting is open
        if (!$online_classe->is_active) {
            toastr()->error(trans('messages.class_not_active')); // Message for class not active
            return redirect()->back();
        }
    
        if (!$online_classe->is_meeting_open) {
            toastr()->error(trans('messages.meeting_not_open_yet')); // Message for meeting not open
            return redirect()->back();
        }
    
        // Proceed to join the lesson if all checks pass
        return view('students.pages.online_classes.join-lesson', compact('online_classe'));
    }
}
