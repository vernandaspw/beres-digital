<?php

namespace App\Http\Livewire\Private;

use Livewire\Component;

class PrivateDashboard extends Component
{
    public function render()
    {
        return view('livewire.private.private-dashboard')->extends('layouts.app')->section('content');
    }
}
