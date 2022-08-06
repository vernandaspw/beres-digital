<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;

class PublicKontak extends Component
{
    public function render()
    {
        return view('livewire.public.public-kontak')->extends('layouts.app')->section('content');
    }
}
