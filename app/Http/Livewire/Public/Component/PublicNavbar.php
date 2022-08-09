<?php

namespace App\Http\Livewire\Public\Component;

use App\Models\Produk;
use Livewire\Component;

class PublicNavbar extends Component
{
    public $produk;
    public function render()
    {
        $this->produk = Produk::orderBy('urut', "DESC")->get();
        return view('livewire.public.component.public-navbar');
    }
}
