<?php

namespace App\Http\Livewire\Public;

use App\Models\Produk;
use Livewire\Component;

class PublicProduk extends Component
{
    public $produk;
    public function render()
    {
        $this->produk = Produk::orderBy('urut', "DESC")->get();
        return view('livewire.public.public-produk')->extends('layouts.app')->section('content');
    }
}
