<?php

namespace App\Http\Livewire\Public\Portofolio;

use App\Models\Portofolio;
use Livewire\Component;

class PublicPortofolioDetail extends Component
{
    public $data = [];
    public function mount($slug)
    {
        $this->data = Portofolio::with('layananjenis', 'layanan', 'galeris')->where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.public.portofolio.public-portofolio-detail')->extends('layouts.app')->section('content');
    }
}
