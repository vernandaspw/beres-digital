<?php

namespace App\Http\Livewire\Public;

use App\Models\Layanan;
use App\Models\Portofolio;
use App\Models\Produk;
use Livewire\Component;

class PublicBeranda extends Component
{
    public $produk, $layanan, $porto;

    public $take = 16;

    public function render()
    {
        $this->produk = Produk::where('istersedia', true)->orderBy('urut', "DESC")->get();
        $this->layanan = Layanan::where('istersedia', true)->orderBy('urut', "DESC")->get();
        $this->porto = Portofolio::with('layananjenis', 'layanan')->where('istampil', true)->take($this->take)->get();
        return view('livewire.public.public-beranda')->extends('layouts.app')->section('content');
    }
}
