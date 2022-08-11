<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
            // dd($user);

            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser, true);
                // auth()->user()->generateCode();
                Session::put('tfa', auth()->user()->id);
                return redirect()->intended('tfa');
            } else {
                $cekemail = User::where('email', $user->email)->first();
                if ($cekemail) {
                    User::find($cekemail->id)->update([
                        'google_id' => $user->id,
                    ]);
                    Auth::login($cekemail, true);
                } else {
                    $newUser = User::create([
                        'nama' => Str::limit($user->name, 35),
                        'google_id' => $user->id,
                        'email' => $user->email
                    ]);
                    Auth::login($newUser, true);
                }

                // auth()->user()->generateCode();
                Session::put('tfa', auth()->user()->id);
                return redirect()->intended('tfa');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
