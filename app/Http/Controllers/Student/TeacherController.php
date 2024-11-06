<?php

namespace App\Http\Controllers\Student;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\package;
use App\Models\Payment;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Student_Log;

use Carbon\Carbon;
use App\Models\Coupon;

class TeacherController extends Controller
{
    public function index(){

        $grades  = Grade::get();
        $subjects = Subject::get();
        $teachers = Teacher::with('subject')
        ->where(['grade_id'=>auth('student')->user()->grade_id])
        ->get();
        return view('students.pages.teachers.index',compact('teachers','grades','subjects'));
    }

    public function show_teacher_details($id){
        $teacher = Teacher::where('id',$id)->first();
        // return $teacher->sections_test->grades->Name;
        return view('students.pages.teachers.show_teacher_details',compact('teacher'));

    }
    public function show($id ){
    
        $teacher = Teacher::where('id',$id)->with('subject')->with('groups.days')->first();
       
       
        $studentId = auth('student')->user()->id;

        $currentDate = Carbon::now();

        // استرجاع معرفات الباقات التي اشترك فيها الطالب بالفعل والتي لا تزال نشطة
        $activeSubscribedPackageIds = Payment::where('student_id', $studentId)
        ->whereHas('package', function($query) use ($currentDate) {
            $query->where('end_at', '>=', $currentDate);
        })
        ->pluck('package_id')
        ->toArray();


        //     return   $activeSubscribedPackageIds;
        // استرجاع التاريخ الحالي
        // استرجاع الباقات التي أضافها المدرس والتي لم يشترك بها الطالب
        $packages = Package::where('status',1)->where('added_by', $teacher->id)
                        ->whereNotIn('id', $activeSubscribedPackageIds)
                        ->where('start_at', '<=', $currentDate)
                        ->where('end_at', '>=', $currentDate)
                        ->get();

        // $packages = package::where('added_by',$teacher->id)->get();
        // ->where
        // return $packages;
        // $teacher->load('subject','groups.days','package');
        // dd(
        //     $teacher
        // );
        return view('students.pages.teachers.show',compact('teacher','packages'));
    }
    public function groups(Teacher $teacher ){
    return 'f';
    }
    public function package_details($id){
     $package = package::where('id',$id)->first();
        return view('students.pages.teachers.package_details',compact('package'));
}

public function applay_coupon(Request $request){
    // $request->validate([
    //     'code' => 'required|string',
    // ]);

    $code = $request->input('code');
    if(empty($code)){
        return response()->json(['error','من فضلك اكتب الكوبون'],400);
    }
    $total_before_coupon = $request->input('total_before_coupon');

    $user = auth('student')->user();
    $coupon = Coupon::where(['code'=>$code,'type_added_by'=>'teacher'])->first();
    if(!$coupon){
        return response()->json(['error','الكوبون غير موجود'],400);
    }


    if($coupon->active == 0){
        return response()->json(['error','coupon not active'],400);
    }

    $count_limit = Student_Log::where('coupone_id',$coupon->id)->count();
   
    if($count_limit >= $coupon->limit){
        return response()->json(['error','لقد تم استخدام الحد الاقصي للكويون'],400);

    }

    $count_limit_student = Student_Log::where(['coupone_id'=>$coupon->id,'student_id'=>$user->id])->count();
    if($count_limit_student >= $coupon->student_limit){
        return response()->json(['error','لقد تم استخدام هذا الكوبون بالنسبه لك'],400);

    }

    $now = Carbon::now();
    if(!empty($coupon->start_date) && !empty($coupon->end_date)){
        $start_date = Carbon::parse($coupon->start_date);
        $end_date = Carbon::parse($coupon->end_date);
        
        if($now < $start_date){
            return response()->json(['error','الكوبون غير فعال'],400);

        }elseif($now > $end_date){
            return response()->json(['error','لقد انتهت صلاحيه هذا الكوبون'],400);

        }
    }
    if($coupon->type=="fixed"){
        $amount = $coupon->amount;
    }else{
        $amount = $total_before_coupon * $coupon->amount/100;
    }

    $total_price = $total_before_coupon - $amount;
    return response()->json([
        'status' =>'true',
        'total_price'=>$total_price,
        'msg'=>'coupon applied success',

    ]);
    // return 'c';
}


public function ajax_search(Request $request) {
    $grade_search = $request->grade_search;
    $subject_search = $request->subject_search;

    // Determine the filter criteria
    $field3 = ($grade_search == 'all') ? "id" : "grade_id";
    $operator3 = ($grade_search == 'all') ? ">" : "=";
    $value3 = ($grade_search == 'all') ? 0 : $grade_search;




    // Determine the filter criteria
    $field2 = ($subject_search == 'all') ? "id" : "subject_id";
    $operator2 = ($subject_search == 'all') ? ">" : "=";
    $value2 = ($subject_search == 'all') ? 0 : $subject_search;

    try {
        // Fetch the filtered data
        $teachers = Teacher::where($field3, $operator3, $value3)
        ->where($field2, $operator2, $value2)
            ->orderby('id', 'desc')
            ->get();

        // Return the rendered view with the data
        return view('students.pages.teachers.ajax_search', compact('teachers'))->render();
    } catch (\Exception $e) {
        \Log::error('Error in ajax_search: ' . $e->getMessage());
        return response()->json(['error' => 'Server Error'], 500);
    }
}


}


// get teacher package where teacher added it 