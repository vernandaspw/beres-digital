<?php

namespace App\Http\Livewire\Public\Portofolio;

use Livewire\Component;

class PublicPortofolioDetail extends Component
{
    public function render()
    {
        return view('livewire.public.portofolio.public-portofolio-detail')->extends('layouts.app')->section('content');
    }
}
