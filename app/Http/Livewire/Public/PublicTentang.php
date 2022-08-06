<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class PublicTentang extends Component
{
    public function render()
    {
        return view('livewire.public.public-tentang')->extends('layouts.app')->section('content');
    }
}
