<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function storeSubscription(Request $request){
        $subscriptionId = $request->subscription_id;
        $userID = Auth::user()->id;

        Subscription::create([
            'user_id' => 
        ])

    }
}
