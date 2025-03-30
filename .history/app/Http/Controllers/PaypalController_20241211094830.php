<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaypalController extends Controller
{
    public function storeSubscription(Request $request){
        Log::info('Received data:', $request->all());
        $subscriptionID = $request->subscription_id;
        $userID = Auth::user()->id;

        Subscription::create([
            'user_id' => $userID,
            'subscriptionID' => $subscriptionID
        ]);
    }
}
