<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class PublicCaraPesan extends Component
{
    public function render()
    {
        return view('livewire.public.public-cara-pesan')->extends('layouts.app')->section('content');
    }
}
