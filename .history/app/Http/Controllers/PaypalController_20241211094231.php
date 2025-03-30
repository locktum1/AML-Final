<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function storeSubscription(Request $request){
        $subscriptionID = $request->subscription_id;
        $userID = Auth::user()->id;

        echo "<script>console.log({{$subscriptionID);</script>";

        Subscription::create([
            'user_id' => $userID,
            'subscriptionID' => $subscriptionID
        ]);
    }
}
