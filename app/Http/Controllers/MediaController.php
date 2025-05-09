<?php

namespace App\Http\Controllers;

use App\Models\BorrowingHistory;
use App\Models\Media;
use App\Models\Review;
use App\Models\ReviewForApproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use function Laravel\Prompts\error;

class MediaController extends Controller
{
    public function MediaView(){
        $media = Media::find('1');
        $borrowedBefore = BorrowingHistory::where('user_id', Auth::id())->exists();

        $reviews = Review::where('media_id',$media->id)
        ->inRandomOrder()
        ->take(5)
        ->get();

        return view('media',compact('media','borrowedBefore','reviews'));
    }

    public function SubmitReview(Request $request){
        $request->validate([
            'rating' => 'required|numeric|min:1|max:5',
            'review' => 'required|max:500',
            // 'g-recaptcha-response' => 'required|captcha',
        ]);

        $review = new ReviewForApproval();
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->user_id = Auth::id();
        $review->media_id = $request->mediaid;
        $review->published_on = today();

        $review->save();

        return redirect()->back()->with('success','Review submitted for review');
    }
}
