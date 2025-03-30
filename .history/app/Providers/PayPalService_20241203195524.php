<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PayPalService extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(PayPal)
    }
    public function boot(): void
    {

    }
}
