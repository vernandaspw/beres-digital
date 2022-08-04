<?php

namespace App\Http\Livewire\Auth;

use App\Mail\SendCodeMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Masuk extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.auth.masuk')->extends('layouts.app')->section('content');
    }

    public function masuk()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $akun = User::where('email', $this->email)->first();
        if ($akun) {
            if (Hash::check($this->password, $akun->password)) {
                if ($akun->isaktif) {
                    Auth::login($akun, true);

                    auth()->user()->generateCode();

                    redirect()->route('tfa');
                }else {
                    session()->flash('error', 'akun tidak aktif');
                }
            }else {
                session()->flash('error', 'password salah');
            }
        }else {
            session()->flash('error', 'email tidak ditemukan');
        }
    }
}
