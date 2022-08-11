<?php

namespace App\Http\Livewire\Public\Layanan;

use App\Models\LayananJenis;
use Livewire\Component;

class PublicLayananJenis extends Component
{
    public $jenis;
    public function render()
    {
        $this->jenis = LayananJenis::where('istersedia', true)->orderBy('urut', 'desc')->get();
        return view('livewire.public.layanan.public-layanan-jenis')->extends('layouts.app')->section('content');
    }
}
