<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Daftar extends Component
{
    public function render()
    {
        return view('livewire.auth.daftar')->extends('layouts.app')->section('content');
    }
}
