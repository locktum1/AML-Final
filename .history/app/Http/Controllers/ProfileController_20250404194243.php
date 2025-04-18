<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function ProfileView(){
        $user = Auth::user()->id
        return view('profile');
    }
}
