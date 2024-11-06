<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

class PayPalServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('paypal_api_context', function ($app) {
            $paypalConfig = config('paypal');
            $apiContext = new ApiContext(
                new OAuthTokenCredential(
                    $paypalConfig[$paypalConfig['mode']]['client_id'],
                    $paypalConfig[$paypalConfig['mode']]['client_secret']
                )
            );
            $apiContext->setConfig($paypalConfig[$paypalConfig['mode']]);
            return $apiContext;
        });
    }
}