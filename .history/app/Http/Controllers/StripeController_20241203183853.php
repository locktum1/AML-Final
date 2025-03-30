<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Subscription;
use Stripe\Checkout\Session;

use function PHPSTORM_META\map;

class StripeController extends Controller
{
    public function Subscribe(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = Customer::create([
            'email' => Auth::User()->email,
            'source' => $request->stripeToken,
        ]);

        $subscription = Subscription::create([
            'customer' => $customer->id,
            'items' => [
                ['price' => 'price_1QRznTB9MWXishUQ8TFZOoj0'],
            ],
        ]);

        session()->flash('success','Subscription has begun! Redirecting you back to the catalogue')

        return redirect()->route('success');
    }
}

