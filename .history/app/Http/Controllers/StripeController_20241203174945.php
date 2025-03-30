<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Subscription;
use Stripe\Checkout\Session;

use function PHPSTORM_META\map;

class StripeController extends Controller
{
    public function createCheckoutSession(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try{
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price' => ''
                    ],
                ],
                'mode' => 'subscription',
                'success_url' => route('subscription.success'),
                'cancel_url' => route('subscription.cancel'),
                'customer_email' => $request->email,
            ]);

            return redirect()->away($session->url);
        } catch (\Exception $error) {
            return redirect()->back()->with('error',$error);
        }
    }
}
