<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function processPayment(Request $request){
        Stripe::setApiKey(env('STRIPE_KEY'));

        try {
            
        }
    }
}
