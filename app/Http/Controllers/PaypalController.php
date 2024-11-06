<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Exception\PayPalConnectionException;
use App\Models\Package;
use App\Models\Coupon;
use App\Models\Payment as PaymentModel;
use App\Models\Student_Log;
use Illuminate\Support\Facades\Log;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function processPayment(Request $request)
{
    $request->validate([
        'orderID' => 'required|string',
        'payerID' => 'required|string',
        'paymentID' => 'required|string',
        // 'package_id' => 'required|exists:packages,id',
        'total' => 'required|numeric',
        'coupon_code' => 'nullable|string',
    ]);

    // Here you would typically verify the payment with PayPal
    // For this example, we'll assume the payment is valid

    $package = Package::findOrFail($request->package_id);
    
    $payment = new Payment([
        'amount' => $request->total,
        'status' => 'completed',
        'payment_method' => 'paypal',
        'transaction_id' => $request->paymentID,
        'package_id' => $package->id,
        'coupon_code' => $request->coupon_code,
    ]);

    $payment->save();

    Log::info("PayPal payment processed for package: {$package->name}, Amount: {$request->total}, PayPal Payment ID: {$request->paymentID}");

    return response()->json([
        'success' => true,
        'message' => 'Payment processed successfully',
    ]);
}

public function paymentSuccess()
{
    return 'success';
    return view('payment.success');
}

    public function create(Request $request) {
        // Step 1: Check if the student is already subscribed to the package
        $package = Package::find($request->package_id);
        $coupon_code = $request->coupon_code;
    
        // Get the coupon if available
        $coupon = Coupon::where(['code' => $coupon_code, 'type_added_by' => 'teacher'])->first();
    
        // Check if the student is already subscribed to the package
        $existingPayment = PaymentModel::where('student_id', auth('student')->user()->id)
            ->where('package_id', $package->id)
            ->first();
    
        if ($existingPayment) {
            // If the student is already subscribed, redirect with an error message
            return redirect()->back()->with('error', 'You are already subscribed to this package.');
        }
    
        // Step 2: Set up PayPal payment
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
    
        $amountInCents = $request->total * 100;
    
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('payment.success'),
                "cancel_url" => route('payment.cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "EUR",
                        "value" => $amountInCents / 100 // PayPal expects the value in dollars
                    ]
                ]
            ]
        ]);
        //  dd($response);
        if (isset($response['id']) && $response['id'] != null) {
            // Redirect the user to PayPal for payment approval
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    // Store some session or database values to associate the payment with the user
                    session(['paypal_order_id' => $response['id']]);
                    return redirect()->away($link['href']);
                }
            }
        } else {
            // Redirect to cancel route if there is an error in the payment creation
            return redirect()->route('payment.cancel');
        }
    }


  
    public function success(Request $request) {
        // Step 3: Handle PayPal success callback
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
    
        $orderId = session('paypal_order_id'); // Retrieve the PayPal order ID

        if (!$orderId) {
            return redirect()->route('cancel');
        }
    
        $response = $provider->capturePaymentOrder($orderId);
        dd($response );
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Payment was successful, proceed to save the payment in your database
    
            $payment = PaymentModel::create([
                'student_id' => auth('student')->user()->id,
                'amount' => $request->total,
                'transaction_id' => $response['id'],  // PayPal order ID
                'package_id' => $request->package_id,
                'teacher_id' => $request->teacher_id,
                'payment_status' => 1,
            ]);
    
            // Handle coupon logic (if any)
            if ($coupon) {
                Student_Log::create([
                    'student_id' => auth('student')->user()->id,
                    'coupon_id' => $coupon->id,
                ]);
            }
    
            // Redirect to a success page
            return redirect()->route('student.dashboard.teachers.index')->with('success', 'Payment was successful.');
        } else {
            // If the payment failed, redirect to cancel
            return redirect()->route('cancel');
        }
    }
  

    public function cancel()
    {
        // Clear session data
        session()->forget(['paypal_payment_id', 'package_id', 'coupon_code', 'total']);

        return redirect()->back()->with('error', 'Payment was cancelled.');
    }
   
}
