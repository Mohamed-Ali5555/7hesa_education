<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\package;
use App\Models\Payment;
use App\Models\Student_Log;
use App\Models\Coupon;

class PaymentController extends Controller
{
    public function index()
    {
       
       return  view('students.pages.payment');   
     }
    public function stripePost(Request $request)
    {
            //    return $request->all();
            // return $request->total;
       $package = package::find($request->package_id);
       $coupon_code = $request->coupon_code;
       $coupon = Coupon::where(['code'=>$coupon_code
       ,'type_added_by'=>'teacher'
       ])->first();
   
         // التحقق مما إذا كان الطالب مشتركًا بالفعل في هذه الباقة
        $existingPayment = Payment::where('student_id', auth('student')->user()->id)
        ->where('package_id', $package->id)
        ->first();

        if ($existingPayment) {
        // إذا وجدنا اشتراكًا مسبقًا في هذه الباقة، نعيد توجيه الطالب مع رسالة خطأ
        return redirect()->back()->with('error', 'You are already subscribed to this package.');
        }
        //    return $package;
        Stripe::setApiKey(env('STRIPE_SECRET'));
        // return $request->total;
        $amountInCents = $request->total * 100;

        $charge = Charge::create([
            'amount' => $amountInCents, // Amount in cents
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Live payment',
        ]);


        $payment = Payment::create([
            'student_id' =>auth('student')->user()->id,
            'amount'=> $request->total ,
            'tansaction_id' =>$charge->id, //strep api discover it on chat gpt
            'package_id' =>$package->id,
            'teacher_id' =>$package->added_by,
            'payment_status'=>1,

        ]);
        if($coupon){
            $Student_Log = Student_Log::create([
                'student_id' => auth('student')->user()->id,
               
                'coupone_id' => $coupon->id,
              
            ]);
        }
      
        toastr()->success(trans('messages.success'));

        return redirect()->route('student.dashboard.teachers.index');
    }
    public function store(Request $request){
        

        $charge = Stripe::charges()->create([
            'currency' => 'USD',
            'source' =>$request->stripeToken,
            'amount' =>$request->total,
            'description' =>'Payment for XYZ product'
        ]);
        $chargeId = $charge['id'];
     
        if ($chargeId) {
            // session()->forget('cart');
            return redirect()->back()->with('success', "payment was done. Thanks");
     
        }else{
            return redirect()->back();
        }
        // \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        // $productname = $request->get('productname');
        // $totalprice = $request->get('total');
        // // $two0 = "00";
        // $total = intval($totalprice * 100);
 
        // $session = \Stripe\Checkout\Session::create([
        //     'line_items' => [
        //         [
        //             'price_data' => [
        //                 'currency'     => 'USD',
        //                 'product_data' => [
        //                     'name' => $productname,
        //                 ],
        //                 'unit_amount'  => $total,
        //             ],
        //             'quantity'   => 1,
        //         ],
        //     ],
        //     'mode'        => 'payment',
        //     'success_url' => route('success'),
        //     'cancel_url'  => route('student.dashboard.teachers.index'),
        // ]);
 
        // return redirect()->away($session->url);
    
    }

    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }
    public function processPayment(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $charge = Charge::create([
            'amount' => $request->amount * 100, // Amount in cents
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Payment Description',
        ]);

        // Handle post-payment logic (e.g., saving order to database)

        return redirect()->route('payment.success');
    }

    public function paymentSuccess()
    {
        return view('payment.success');
    }
}
