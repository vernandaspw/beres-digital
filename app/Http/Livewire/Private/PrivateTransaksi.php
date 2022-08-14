<?php

namespace App\Http\Livewire\Private;

use App\Models\Transaksi;
use Livewire\Component;

class PrivateTransaksi extends Component
{
    public $transaksi = [];

    public $take = 20;

    public function lanjut()
    {
        $this->take = $this->take + 10;
    }

    public function render()
    {
        $this->transaksi = Transaksi::with('layananjenis', 'layanan', 'user')->take($this->take)->get();
        return view('livewire.private.private-transaksi')->extends('layouts.app')->section('content');
    }
}
