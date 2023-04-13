<?php

namespace App\Http\Livewire\Public\Pesanan;

use App\Models\DataRekening;
use App\Models\Transaksi;
use Livewire\Component;

class PublicPembayaranAkhir extends Component
{
    public $data, $rekening;

    public $jumlah_bayar;

    public function mount($id)
    {
        $this->data = Transaksi::where('no_transaksi', $id)->first();
        $this->rekening = DataRekening::where('metode_pembayaran_id', $this->data->metode_pembayaran_id)->where('istersedia', true)->get();
    }

    public function render()
    {
        return view('livewire.public.pesanan.public-pembayaran-akhir')->extends('layouts.app')->section('content');
    }
}
