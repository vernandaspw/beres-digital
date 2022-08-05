<?php

namespace App\Http\Livewire\Public\Layanan;

use Livewire\Component;

class PublicLayananJenisDetail extends Component
{
    public function render()
    {
        return view('livewire.public.layanan.public-layanan-jenis-detail')->extends('layouts.app')->section('content');
    }
}
