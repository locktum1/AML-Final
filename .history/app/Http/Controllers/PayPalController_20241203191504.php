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
        $plan->setName('Test Subscription Plan')
             ->setDescription('Test Plan Description')
             ->setType('FIXED');
    }
}
