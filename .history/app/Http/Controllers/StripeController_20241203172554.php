<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Subscription;

class StripeController extends Controller
{
    public function createSubscription(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $customer = Customer::create([
                'email' => $request->email,
                'name' => $request->name,
                'source' => $request->stripeToken,
            ]);

            $subscription = Subscription::create([
                'customer' => $customer->id,
                'items' => [
                    ['price' => 'price_1QRznTB9MWXishUQ8TFZOoj0'],
                ]
                ]);

            return response()->json(['success' => 'Processed!']);
        } catch (\Exception $error) {
            return response()->json(['error' => $error->getMessage()]);
        }

    }
}
