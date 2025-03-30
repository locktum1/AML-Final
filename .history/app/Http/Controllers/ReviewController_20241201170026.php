<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function ReviewView(int id){
        return view ("review");
    }
}
