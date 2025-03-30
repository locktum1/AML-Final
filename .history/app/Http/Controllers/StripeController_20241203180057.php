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
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Create the Stripe Checkout session for subscription
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price' => 'price_1QRznTB9MWXishUQ8TFZOoj0',  // Your actual price ID for subscription
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'subscription',  // Ensure 'subscription' mode for recurring payments
                'success_url' => route('subscription.success'),  // Your success route
                'cancel_url' => route('subscription.cancel'),    // Your cancel route
                'customer_email' => $request->email,  // The email passed from the form
            ]);

            // Redirect the user to Stripe's checkout page
            return redirect()->away($session->url);

        } catch (\Exception $error) {
            // Log and return error if Stripe session creation fails
            return redirect()->back()->with('error', $error->getMessage());
        }
    }
}

