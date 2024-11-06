<?php

namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Payment;
use App\Models\package;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::where('teacher_id',auth()->user('teacher')->id)->get();
        // foreach($payments as $x){
        //     dd(  $x->studen);

        // }
        return view('teacher.pages.payments.index', compact('payments'));
     }
     public function update_status(Request $request ,$id){
        $payment = Payment::findOrFail($id);

         $payment->payment_status = $request->input('payment_status');
        $payment->save();

        $package_id = $payment->package_id;
        $package = Package::findOrFail($package_id);
        $package->active = $request->input('payment_status');
        $package->save();


// return $package;
       toastr()->success(trans('messages.success'));
       return redirect()->back()->with('success', 'تم تحديث حالة الدفع بنجاح');
    }
  
}
