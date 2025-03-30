<?php

use App\Models\Log;
use Illuminate\Support\Facades\Auth;

if (!function_exists('logActivity'))
{
    function logActivity($action, $details = null)
    {
        Log::create([
            'user_id' => Auth::id(),
            'action' => $action,
            'details' => $details,
            'ip' => request()->ip(),
        ]);
    }
}


