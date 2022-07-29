<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Masuk extends Component
{
    public function render()
    {
        return view('livewire.auth.masuk')->extends('layouts.app')->section('content');
    }
}
