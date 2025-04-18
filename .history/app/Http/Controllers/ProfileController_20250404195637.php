<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FA\Google2FA;

class ProfileController extends Controller
{
    public function ProfileView(){
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function SetUp2FA(){
        $google2fa = new Google2FA();
        
    }
}
