<?php

namespace App\Http\Livewire\Public;

use App\Models\Layanan;
use App\Models\Produk;
use Livewire\Component;

class PublicBeranda extends Component
{
    public $produk, $layanan;

    public function render()
    {
        $this->produk = Produk::where('istersedia', true)->orderBy('urut', "DESC")->get();
        $this->layanan = Layanan::where('istersedia', true)->orderBy('urut', "DESC")->get();
        return view('livewire.public.public-beranda')->extends('layouts.app')->section('content');
    }
}
