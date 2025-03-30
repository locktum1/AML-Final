<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function storeSubscription(Request $request){
        $subscriptionId = $request->subscription_id;
        $userID = Auth()=>User
    }
}
