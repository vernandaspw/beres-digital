<?php

namespace App\Http\Livewire\Public\Layanan;

use Livewire\Component;

class PublicLayananJenis extends Component
{
    public function render()
    {
        return view('livewire.public.layanan.public-layanan-jenis')->extends('layouts.app')->section('content');
    }
}
