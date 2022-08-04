<?php

namespace App\Http\Livewire\Auth;

use App\Models\UserCode;
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

        $find = UserCode::where('user_id', auth()->user()->id)
                        ->where('code', $this->code)
                        ->first();
        if ($find) {
            if ($find->code_expired <= now()) {
                Session::put('tfa', auth()->user()->id);
                if (auth()->user()->role == 'customer') {
                    redirect()->to('dashboard');
                }else {
                    redirect()->to('admin');
                }
            }else {
                session()->flash('error', 'kode otp telah expired');
            }
        }else {
            session()->flash('error', 'kode otp salah');
        }
    }

    public function resend()
    {
        auth()->user()->generateCode();
        session()->flash('success', 'Kami mengirimi Anda kode di email Anda');
    }
}
