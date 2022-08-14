<?php

namespace App\Http\Livewire\Public;

use App\Models\Transaksi;
use Livewire\Component;

class PublicDashboard extends Component
{
    public $transaksi = [];
    public function render()
    {
        $this->transaksi = Transaksi::with('layananjenis', 'layanan')->where('user_id', auth()->user()->id)->get();
        return view('livewire.public.public-dashboard')->extends('layouts.app')->section('content');
    }
}
