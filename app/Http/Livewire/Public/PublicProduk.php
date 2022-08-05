<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class PublicProduk extends Component
{
    public function render()
    {
        return view('livewire.public.public-produk')->extends('layouts.app')->section('content');
    }
}
