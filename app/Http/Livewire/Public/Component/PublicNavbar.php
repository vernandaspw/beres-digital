<?php

namespace App\Http\Livewire\Public\Component;

use App\Models\LayananJenis;
use App\Models\Produk;
use Livewire\Component;

class PublicNavbar extends Component
{
    public $produk, $layanan;
    public function render()
    {
        $this->produk = Produk::where('istersedia', true)->orderBy('urut', "DESC")->get();
        $this->layanan = LayananJenis::where('istersedia', true)->orderBy('urut', "DESC")->get();
        return view('livewire.public.component.public-navbar');
    }
}
