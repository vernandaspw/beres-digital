<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class PublicBeranda extends Component
{
    public function render()
    {
        return view('livewire.public.public-beranda')->extends('layouts.app')->section('content');
    }
}
