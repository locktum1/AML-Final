<?php

use App\Http\Middleware\CheckIfLibrarian;
use Illuminate\Foundation\Middleware\PreventRequestsDuringMaintenance;
use Illuminate\Foundation\Middleware\ValidatePostSize;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->push(CheckIfLibrarian::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
