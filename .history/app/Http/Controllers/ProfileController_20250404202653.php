<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FA\Google2FA;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    public function Show2FA(){
        $user = Auth::user();
        $google2fa = new Google2FA();

        if (!$user->google2fa_secret){
            return redirect()->route('setup.2fa');
        }

        $qrCodeUrl = 'otpauth://totp/'.config('app.name').':'.$user->email.'?secret='.$user->google2fa_secret.'&issuer='.config('app.name');

        $qrCode = 'data:image/png;base64,' . base64_encode($qrCodeData);

        return view('2FA', [
            'qrCode' => QrCode::size(200)->generate($qrCodeUrl)
        ]);
    }
}
