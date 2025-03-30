<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Plan;
use PayPal\Api\Payer;
use PayPal\Api\Agreement;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PayPalController extends Controller
{
    public function PayWithPayPal(Request $request){
        $apiContent = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuth
        )
    }
}
