<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\Request;
use Illuminate\Queue\Middleware\ThrottlesExceptions;
use Illuminate\Support\Facades\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

class ThrottleLoginsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = $this->ThrottleKey($request);
        $maxAttempts = 5;
        $decaySeconds = 60;

        if (RateLimiter::tooManyAttempts($key,$maxAttempts)){
            $retryAfter = RateLimiter::availableIn($key);
            throw new ThrottleRequestsException("Too many log in attempts! Try again in {$retryAfter} seconds.");
        }

        RateLimiter::hit($key, $decaySeconds);
        $response=$next($request);
        if ($response->getStatusCode() === 200){
            RateLimiter::clear($key);
        }

        private function ThrottleKey($request){

        }


    }
}
