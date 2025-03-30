<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function PaymentView(Request $request){
        $tier = $request->input('tier');
        $price = $request->input('price');
        return view('payment');
    }
}
