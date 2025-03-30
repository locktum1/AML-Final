<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function storeSubscription(Request $request){
        $subscriptionID = $request->input('subscription_id');
        $userID = Auth::user()->id;

        \Log::debug('Received subscription ID:', ['subscription_id' => $subscriptionID]);

        Subscription::create([
            'user_id' => $userID,
            'subscriptionID' => $subscriptionID
        ]);
    }
}
