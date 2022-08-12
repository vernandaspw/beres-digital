<?php

namespace App\Http\Livewire\Public\Pesan;

use App\Models\Layanan;
use App\Models\LayananJenis;
use App\Models\LayananVarian;
use App\Models\Setting;
use App\Models\Transaksi;
use Livewire\Component;

class PublicPesan extends Component
{
    public $layananjenis = [], $layanan = [];
    public $layanan_varian1 = [];

    public $layanan_jenis_id, $layanan_id, $nama_project, $keterangan;
    public $layanan_varian_item_1;

   
    public function render()
    {
        $this->layananjenis = LayananJenis::where('istersedia', true)->get();
        if ($this->layanan_jenis_id) {
            $this->layanan = Layanan::where('layanan_jenis_id', $this->layanan_jenis_id)->where('istersedia', true)->get();
            if ($this->layanan_id) {
                $this->layanan_varian1 = LayananVarian::with('layananvarianitem')->where('layanan_id', $this->layanan_id)->where('istersedia', true)->first();
            }
        }
        return view('livewire.public.pesan.public-pesan')->extends('layouts.app')->section('content');
    }

    public function buat()
    {      
        $this->validate([
            'layanan_jenis_id' => 'required',
            'layanan_id' => 'required',
            'nama_project' => 'required|max:100',
            'keterangan' => 'required'
        ]);
        $make_no = 'BD' . date('Y') . date('m') . date('d') . date('H') . rand(10, 99) . rand(100, 999). rand(1, 9);
        $cek_transaksi = Transaksi::where('no_transaksi', $make_no)->first();
        if ($cek_transaksi != null) {
            $make_no = 'T' . date('Y') . date('m') . date('d') . date('H') . rand(10, 99) . rand(11, 99);
        }
        $setting = Setting::first();
        $layanan = Layanan::find($this->layanan_id);

        $pajak = $setting->pajak;
        $harga_layanan = $layanan->harga;



        $harga_tambahan = $harga_layanan ;
        

        Transaksi::create([
            'user_id' => auth()->user()->id,
            'no_transaksi' =>  $make_no,
            'layanan_jenis_id' => $this->layanan_jenis_id,
            'layanan_id' => $this->layanan_id,
            'nama_project' => $this->nama_project,
            'keterangan' => $this->keterangan,
            'harga_layanan' => $harga_layanan,
            'harga_tambahan' => $harga_tambahan,
            // 'subtotal_layanan' => 
            // 'kode_unik' => 
            // 'pajak' => 
            // 'total_pembayaran' => 
            'status' => 'pending',
            'status_bayar' => 'belum bayar'
        ]);
    }
}
