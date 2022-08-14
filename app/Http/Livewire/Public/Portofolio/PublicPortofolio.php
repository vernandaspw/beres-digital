<?php

namespace App\Http\Livewire\Public\Portofolio;

use App\Models\Layanan;
use App\Models\Portofolio;
use Livewire\Component;

class PublicPortofolio extends Component
{
    public $layanan = [], $porto=[];

    public $take = 16;

    public function lanjut()
    {
        $this->take = $this->take + 12;
    }

    public function render()
    {
        $this->layanan = Layanan::where('istersedia', true)->latest()->get();

        $this->porto = Portofolio::with('layananjenis', 'layanan')->where('istampil', true)->take($this->take)->get();

        return view('livewire.public.portofolio.public-portofolio')->extends('layouts.app')->section('content');
    }
}
