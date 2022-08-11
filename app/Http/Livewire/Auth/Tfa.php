<?php

namespace App\Http\Livewire\Auth;

use App\Helpers\SendWaFonnte;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Tfa extends Component
{
    public $code;

    public function render()
    {
        return view('livewire.auth.tfa')->extends('layouts.app')->section('content');
    }

    public function store()
    {
        $this->validate([
            'code' => 'required',
        ]);
        $hash = User::find(auth()->user()->id);
        if ($hash) {
            $find = User::find(auth()->user()->id)
                ->where('code', Hash::check($this->code, $hash->password))
                ->first();
            if ($find) {
                if ($find->code_expired >= now()) {
                    Session::put('tfa', auth()->user()->id);
                    // session forget otp
                    session()->forget('otp');
                    // delete otp
                    User::find(auth()->user()->id)->update([
                        'code' => null,
                    ]);
                    if (auth()->user()->role == 'customer') {
                        redirect()->to('dashboard');
                    } else {
                        redirect()->to('admin');
                    }
                } else {
                    session()->flash('error', 'kode otp telah expired');
                }
            } else {
                session()->flash('error', 'kode otp salah');
            }
        } else {
            session()->flash('error', 'tidak ada akun');
        }
    }

    public function resend()
    {
        $ucode = User::find(auth()->user()->id);
        $waktu = $ucode->resend_code;
        if ($waktu < now()) {
            if (session('otp') == 'email') {
                auth()->user()->generateCode();
                session()->flash('success', 'Kami mengirimi Anda kode di email Anda');
            } elseif (session('otp') == 'wa') {
                $code = rand(1000, 9999);
                $code_expired = now()->addMinutes(5);
                User::find(auth()->user()->id)->update([
                    'code' => Hash::make($code),
                    'code_expired' => $code_expired
                ]);
                SendWaFonnte::send(auth()->user()->nohp, 'OTP anda:' . ' ' . $code);
                session()->flash('success', 'Kami mengirimi Anda kode di whatsapp Anda');
            }
        } else {
            $diff = Carbon::parse($waktu)->diffForHumans();
            session()->flash('error', 'tunggu ' . $diff);
        }
    }

}
