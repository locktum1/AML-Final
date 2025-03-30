<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Plan;
use PayPal\Api\Payer;
use PayPal\Api\Agreement;

class PayPalController extends Controller
{
    public function createSubscription(){
        $plan = new Plan();
        $plan->setName('Basic subscription')
             ->setDescription('Borrow one media product at a time with a 1 month return window.')
             ->setType('FIXED');

        return view('subscription.create',compact('plan'));
    }

    public function processSubscription(Request $request){
        $token = $request->query('token');
        if (!token) {
            
        }
    }
}
