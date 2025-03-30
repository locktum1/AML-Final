<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PayPal\Core\PayPalHttpConfig;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckout\LiveEnvironment;

class PayPalService extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(PayPalHttpClient::class, function($app){
            $environment = config('paypal.environment') === 'sandbox'
            ? new SandboxEnvironment(config('paypal.client_id'),config('paypal.secret'))
            : new LiveEnvironment(config('paypal.client_id'),config('paypal.secret'));

            return new PayPalHttpConfig($environment);
        });
    }
    public function boot(): void
    {

    }
}
