<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{

   public function index(){
    $coupons = Coupon::where(['type_added_by'=>'teacher','added_by'=>auth()->user('teacher')->id])->get();
    return view('teacher.pages.coupon.index', compact('coupons'));

   }

   public function create()
   {
     
       return view('teacher.pages.coupon.create');
   }
   public function store(Request $request)
   {
       Coupon::create([
           'name' => $request->name,
           'code' => ! empty($request->code) ? $request->code : fake()->uuid(),
           'amount' => $request->amount,
           'type' => $request->type,
           'limit' => $request->limit,
           'student_limit' => $request->student_limit,
           'start_date' => $request->start_date,
           'end_date' => $request->end_date,
           'added_by' => auth()->user('teacher')->id,
           'type_added_by' => 'teacher',

           'active'=>$request->active ? '1' :'0',
       ]);

       toastr()->success(trans('messages.success'));
       return to_route('teacher.coupon.index');
   }
   public function edit($id)
   {
       $coupon = Coupon::where('id',$id)->first();
       return view('teacher.pages.coupon.edit', compact('coupon'));
   }


   public function update(Request $Request,  $id)
   {
       // Check if $coupon is a Collection and retrieve the first item if it is
       $coupon = Coupon::where('id',$id)->first();

   
       // Update the Coupon instance
       $coupon->name = $request->name;
       // $coupon->code =  ! empty($request->code) ? $request->code : fake()->uuid();
       $coupon->code = $request->code;
       $coupon->start_date = $request->start_date;
       $coupon->end_date = $request->end_date;
       $coupon->limit = $request->limit;
       $coupon->student_limit = $request->student_limit;
       $coupon->amount = $request->amount;
       $coupon->type = $request->type;
       $coupon->active = $request->active ? '1' :'0';

       $coupon->added_by = auth()->user('teacher')->id;
       $coupon->type_added_by = 'teacher';
       $coupon->save();
   
       toastr()->success(trans('messages.success'));
       return to_route('teacher.coupon.index');
   }
   

   public function destroy(Request $Request,  $id)
   {
       $coupon = Coupon::where('id',$id)->first();

       $coupon->delete();

       toastr()->success(trans('messages.success'));

       return to_route('teacher.coupon.index');
   }
}
