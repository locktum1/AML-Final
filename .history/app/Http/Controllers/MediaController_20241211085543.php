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
        try {

        } catch (\Exception $e){
            return redirect()->back()->withErrors('error','An unexpected error has occured!');
        }
    }
}
