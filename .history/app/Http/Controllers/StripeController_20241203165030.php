<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;

class StripeController extends Controller
{
    public function createSubscription(Request $request){
        Stripe::setApiKey(env('STRIPE_KEY'));

        try {
            $customer = Customer::create([
                'amount' => $request->amount * 100,
                'currency' => 'usd',
                'source' => $request->stripetoken,
                'description' => 'Test payment'
            ]);

            return response()->json(['success' => 'Processed!']);
        } catch (\Exception $error) {
            return response()->json(['error' => $error->getMessage()]);
        }

    }

    public
}
