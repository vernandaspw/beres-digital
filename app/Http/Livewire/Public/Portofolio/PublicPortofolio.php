<?php

namespace App\Http\Livewire\Public\Portofolio;

use Livewire\Component;

class PublicPortofolio extends Component
{
    public function render()
    {
        return view('livewire.public.portofolio.public-portofolio')->extends('layouts.app')->section('content');
    }
}
