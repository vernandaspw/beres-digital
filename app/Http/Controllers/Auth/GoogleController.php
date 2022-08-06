<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                auth()->user()->generateCode();
                return redirect()->intended('tfa');
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'nama' => Str::limit($user->name,35),
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'role' => 'customer',
                    'password' => null
                ]);
                Auth::login($newUser);
                auth()->user()->generateCode();
                return redirect()->intended('tfa');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
