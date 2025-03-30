<?php

use App\Models\Log;

if (!function_exists('logActivity'))
{
    function logActivity($action, $details = null)
    {
        Log::create([
            'user_id' => Auth::id(),
            'action'
        ])
    }
}


