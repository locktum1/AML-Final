<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PragmaRX\Google2FA\Google2FA;
use Illuminate\Support\Facades\Auth;

class TwoFactorAuthController extends Controller
{
    public function ShowVerify2FAView()
    {
        return view("2FAVerify");
    }

    public function Verify2FA(Request $request)
    {
        $request->validate(['otp' => 'required']);
        $user = User::find(session('auth_user_id'));

        if (!$user)
        {
            return redirect()->route('login')->withErrors(['failed' => 'Session expired, please try again']);
        }

        $google2fa = new Google2FA();

        if ($google2fa->verifyKey($user->google2fa_secret, $request->otp)){
            Auth::login($user);
            session()->forget('auth_user_id');
            logActivity('2FA Verified', 'User successfully verified 2FA');
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withErrors(['otp' => 'Invalid OTP, try again']);
        }

    }
}
