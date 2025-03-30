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

        return response()->json([
            'subscription_id' => $subscriptionID,
            'user_id' => $userID
        ]);

        Subscription::create([
            'user_id' => $userID,
            'subscriptionID' => $subscriptionID
        ]);
    }
}
