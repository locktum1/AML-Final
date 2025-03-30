<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function SubscribeView()
    {
        return view('subscribe');
    }

    public function StoreSubscription(Request $request)
    {
        $subscriptionID
    }
}
