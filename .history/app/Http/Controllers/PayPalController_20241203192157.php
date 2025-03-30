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
    private $apiContext;

    public function __construct()
    {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );

        $this->apiContext->setConfig([
            'mode' => config('paypal.settings.mode');
            'http.ConnectionTimeOut' => config()
        ])
    }

    public function createSubscription(){
        $plan = new Plan();
        $plan->setName('Basic subscription')
             ->setDescription('Borrow one media product at a time with a 1 month return window.')
             ->setType('FIXED');

        return view('subscription.create',compact('plan'));
    }

    public function processSubscription(Request $request){
        $token = $request->query('token');
        try {
            $agreement = new Agreement();
            $agreement->execute($token, $this->apiContext);
            return redirect('/subscription-success');
        } catch (\Exception $exception) {
            return redirect('/subscription-cancel')->with('error', $exception->getMessage());
        }
    }
}
