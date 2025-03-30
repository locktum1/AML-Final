<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

class PayPalServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ApiContext::class, function () {
            $apiContext = new ApiContext(
                new OAuthTokenCredential(
                    config('paypal.client_id'),
                    config('paypal.secret')
                )
            );

            $apiContext->setConfig(config('paypal.settings'));
            return $apiContext;
        });
    }

    public function boot()
    {
        //
    }
}
