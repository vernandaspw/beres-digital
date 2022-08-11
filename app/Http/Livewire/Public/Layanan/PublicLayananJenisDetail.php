<?php

namespace App\Http\Livewire\Public\Layanan;

use App\Models\Layanan;
use App\Models\LayananJenis;
use Livewire\Component;

class PublicLayananJenisDetail extends Component
{
    public $layanan; 

    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $jenis = LayananJenis::where('slug', $this->slug)->first();
        $this->layanan = Layanan::where('layanan_jenis_id', $jenis->id)->where('istersedia', true)->orderBy('urut', 'desc')->get();
       
        return view('livewire.public.layanan.public-layanan-jenis-detail')->extends('layouts.app')->section('content');
    }
}
