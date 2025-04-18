<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function ProfileView(){
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function SetUp2FA()
}
