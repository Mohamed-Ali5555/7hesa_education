<?php
namespace App\Services\Payment;

class StripeService
{
    public function create(){
        // \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // // Get the payment amount and email address from the form.
        // // $amount = $request->input('amount') * 100;
        // // $email = $request->input('email');
    
        // // Create a new Stripe customer.
        // $customer = \Stripe\Customer::create([
        //     // 'email' => $email,
        //     // 'source' => $request->input('stripeToken'),
        // ]);
        
        // // Create a new Stripe charge.
        // $charge = \Stripe\Charge::create([
        //     // 'customer' => $customer->id,
        //     // 'amount' => $amount,
        //     // 'currency' => 'usd',
        // ]);
    
    }
}