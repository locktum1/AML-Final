<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $user = Auth::user();

        if (!$user->google2fa_secret){
            $user->Generate2FASecret();
        }

        return redirect()->route('show.2fa')->with('success','2FA has been enabled!');
    }
    public function 
}
