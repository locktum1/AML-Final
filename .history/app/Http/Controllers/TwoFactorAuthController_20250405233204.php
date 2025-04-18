<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PragmaRX\Google2FA\Google2FA;

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

    }
}
