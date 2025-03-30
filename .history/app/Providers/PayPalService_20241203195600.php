<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PayPalCheckoutSdk\Core\PayPalHttpClient;

class PayPalService extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(PayPalHttpClient::class, function($app){
            $environment = config('paypal.environment') === 'sandbox'
            
        })
    }
    public function boot(): void
    {

    }
}
