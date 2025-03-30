<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Rules\CapitalizedName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PDO;

class RegisterController extends Controller
{
    public function RegisterView(){
        return view('register');
    }

    public function Submit(Request $request){
        $request->validate([
            'name' => [
                'required',
                'string',
                'regex:/\s/',
                new CapitalizedName(),
            ],
            'email' => 'required|max:50|unique:users|email',
            'password' => 'required|min:8|max:50',
            'dob' => 'required|date|before_or_equal:today|before:-18 years|after:-100 years',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dob' => $request->dob,
        ]);

        

        Auth::login($user);

        return redirect()->intended('/subscribe');

    }
}
