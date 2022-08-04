<?php

namespace App\Http\Livewire\Public\Component;

use Livewire\Component;

class PublicFooter extends Component
{
    public function render()
    {
        return view('livewire.public.component.public-footer')->extends('layouts.app')->section('content');
    }
}
