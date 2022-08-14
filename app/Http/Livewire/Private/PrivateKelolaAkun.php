<?php

namespace App\Http\Livewire\Private;

use App\Models\User;
use Livewire\Component;

class PrivateKelolaAkun extends Component
{
    public $akun = [];
    public function render()
    {
        $this->akun = User::latest()->get();
        return view('livewire.private.private-kelola-akun')->extends('layouts.app')->section('content');
    }
}
