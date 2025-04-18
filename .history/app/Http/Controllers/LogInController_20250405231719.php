<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Exists;
use League\CommonMark\Extension\CommonMark\Renderer\Block\ThematicBreakRenderer;

class LogInController extends Controller
{
    public function LogInView(){
        return view('login');
    }

    public function Enter2FA(){
        return view ('2fa');
    }

    public function Submit(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){

            $user = Auth::user();
            if (!empty($user->google2fa_secret)){
                session(['auth_user_id' => $user->id]);
                Auth
            }

            logActivity('Login', 'User logged in.');
            return redirect()->intended('/');
        } else {
            logActivity('Login failed', 'Invalid login attempt.');
            return redirect()->back()->withErrors(['failed' => 'Invalid credentials']);
        };
    }
}
