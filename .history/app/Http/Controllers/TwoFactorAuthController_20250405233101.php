<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        if (!user)
        {
            return redirect()
        }
    }
}
