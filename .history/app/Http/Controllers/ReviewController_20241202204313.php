<?php

namespace App\Http\Controllers;

use App\Models\ReviewForApproval;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function ReviewView()
    {
        $reviews = ReviewForApproval::with('media')->get();

        return view('review',compact('reviews'));
    }

    public function ApproveReview(Request $request){
        $userid = Auth::id
    }

}
