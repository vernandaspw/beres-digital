<?php

namespace App\Http\Livewire\Auth;

use App\Helpers\SendWaFonnte;
use App\Mail\SendCodeMail;
use App\Models\User;
use App\Models\UserCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Masuk extends Component
{
    public $emailorwhatsapp, $password;

    public function render()
    {
        return view('livewire.auth.masuk')->extends('layouts.app')->section('content');
    }

    public function masuk()
    {
        $this->validate([
            'emailorwhatsapp' => 'required',
            'password' => 'required'
        ]);

        if (strstr($this->emailorwhatsapp, '@')) {
            $email = User::where('email', $this->emailorwhatsapp)->first();
            if ($email) {
                if (Hash::check($this->password, $email->password)) {
                    if ($email->isaktif) {
                        Auth::login($email, true);
                        auth()->user()->generateCode();
                        session()->put('otp', 'email');
                        redirect()->route('tfa');
                    } else {
                        session()->flash('error', 'akun tidak aktif');
                    }
                } else {
                    session()->flash('error', 'password salah');
                }
            } else {
                session()->flash('error', 'email tidak ditemukan');
            }
        } else {
            if (strpos(substr($this->emailorwhatsapp, 0, 3), '08') !== false) {
                $awal = str_replace("08", "628", substr($this->emailorwhatsapp, 0, 3));
                $this->emailorwhatsapp = $awal . substr($this->emailorwhatsapp, 3);
            }
            $whatsapp = User::where('nohp', $this->emailorwhatsapp)->first();
            if ($whatsapp) {    
                if (Hash::check($this->password, $whatsapp->password)) {
                    if ($whatsapp->isaktif) {
                        Auth::login($whatsapp, true);
                        $code = rand(1000, 9999);
                        $code_expired = now()->addMinutes(5);
                        $resend_code = now()->addMinutes(2);
                        User::find(auth()->user()->id)->update([
                            'code' => Hash::make($code),
                            'code_expired' => $code_expired,
                            'resend_code' => $resend_code
                        ]);
                        SendWaFonnte::send(auth()->user()->nohp, 'OTP anda:' . ' ' . $code);
                        session()->put('otp', 'wa');
                        redirect()->route('tfa');
                    } else {
                        session()->flash('error', 'akun tidak aktif');
                    }
                } else {
                    session()->flash('error', 'password salah');
                }
            } else {
                session()->flash('error', 'whatsapp tidak ditemukan');
            }
        }
    }
}
