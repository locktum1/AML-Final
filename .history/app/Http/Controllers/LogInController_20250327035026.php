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

    public function Submit(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withErrors(['failed' => 'Invalid credentials']);
        };
    }
}
