<?php

namespace App\Http\Livewire\Public\Pesan;

use App\Models\Layanan;
use App\Models\LayananJenis;
use App\Models\LayananVarian;
use App\Models\LayananVarianDua;
use App\Models\LayananVarianEmpat;
use App\Models\LayananVarianItem;
use App\Models\LayananVarianItemDua;
use App\Models\LayananVarianItemEmpat;
use App\Models\LayananVarianItemLima;
use App\Models\LayananVarianItemTiga;
use App\Models\LayananVarianLima;
use App\Models\LayananVarianTiga;
use App\Models\MetodePembayaran;
use App\Models\Setting;
use App\Models\Transaksi;
use App\Models\TransaksiLog;
use Livewire\Component;

class PublicPesan extends Component
{
    public $layananjenis = [], $layanan = [], $metode_pembayaran = [], $setting = [];
    public $layanan_varian = [], $layanan_varian2 = [], $layanan_varian3 = [], $layanan_varian4 = [], $layanan_varian5 = [];

    public $layanan_jenis_id, $layanan_id, $metode_pembayaran_id;
    public $nama_project, $keterangan, $kode_unik;

    public $total_pajak, $harga_layanan, $harga_tambahan, $subtotal_layanan, $pendapatan, $total_pembayaran, $fee;

    public $layanan_varian_item_1, $layanan_varian_item_2, $layanan_varian_item_3, $layanan_varian_item_4, $layanan_varian_item_5;

    public function updated()
    {
        if ($this->layanan_id) {
            $layanan = Layanan::find($this->layanan_id);
            $this->harga_layanan = $layanan->harga;

            if ($this->layanan_varian_item_1) {
                $varian1 = LayananVarianItem::find($this->layanan_varian_item_1)->harga;
            }else {
                $varian1 = 0;
            }
            if ($this->layanan_varian_item_2) {
                $varian2 = LayananVarianItemDua::find($this->layanan_varian_item_2)->harga;
            }else {
                $varian2 = 0;
            }
            if ($this->layanan_varian_item_3) {
                $varian3 = LayananVarianItemTiga::find($this->layanan_varian_item_3)->harga;
            }else {
                $varian3 = 0;
            }
            if ($this->layanan_varian_item_4) {
                $varian4 = LayananVarianItemEmpat::find($this->layanan_varian_item_4)->harga;
            }else {
                $varian4 = 0;
            }
            if ($this->layanan_varian_item_5) {
                $varian5 = LayananVarianItemLima::find($this->layanan_varian_item_5)->harga;
            }else {
                $varian5 = 0;
            }

            if ($this->layanan_varian_item_1 || $this->layanan_varian_item_2 || $this->layanan_varian_item_3 || $this->layanan_varian_item_4 || $this->layanan_varian_item_5) {
                $this->harga_tambahan = $varian1 + $varian2 + $varian3 + $varian4 + $varian5;
            }else {
                $this->harga_tambahan = 0;
            }
        }
        if ($this->metode_pembayaran_id) {
            $metode = MetodePembayaran::find($this->metode_pembayaran_id);
            $this->fee = $metode->fee;
            if ($metode->metode == 'manual') {
                $this->kode_unik = rand(100, 1500);
            }else {
                $this->kode_unik = 0;
            }
        }

        $setting = Setting::first();

        $this->subtotal_layanan = $this->harga_layanan + $this->harga_tambahan;
        $this->pendapatan = $this->subtotal_layanan + $this->kode_unik + $this->fee;
        $this->total_pajak = $this->pendapatan * $setting->pajak / 100;
        $this->total_pembayaran = $this->pendapatan + $this->total_pajak;
    }

    public function render()
    {
        $this->layananjenis = LayananJenis::where('istersedia', true)->get();
        if ($this->layanan_jenis_id) {
            $this->layanan = Layanan::where('layanan_jenis_id', $this->layanan_jenis_id)->where('istersedia', true)->get();
            if ($this->layanan_id) {
                $this->layanan_varian = LayananVarian::with('items')->where('layanan_id', $this->layanan_id)->where('istersedia', true)->first();
                $this->layanan_varian2 = LayananVarianDua::with('items')->where('layanan_id', $this->layanan_id)->where('istersedia', true)->first();
                $this->layanan_varian3 = LayananVarianTiga::with('items')->where('layanan_id', $this->layanan_id)->where('istersedia', true)->first();
                $this->layanan_varian4 = LayananVarianEmpat::with('items')->where('layanan_id', $this->layanan_id)->where('istersedia', true)->first();
                $this->layanan_varian5 = LayananVarianLima::with('items')->where('layanan_id', $this->layanan_id)->where('istersedia', true)->first();
            }
        }

        $this->metode_pembayaran = MetodePembayaran::where('istersedia', true)->get();
        $this->setting = Setting::first();


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
        $make_no = 'BD' . date('Y') . date('m') . date('d') . date('H') . rand(10, 99) . rand(100, 999) . rand(1, 9);
        $cek_transaksi = Transaksi::where('no_transaksi', $make_no)->first();
        if ($cek_transaksi != null) {
            $make_no = 'T' . date('Y') . date('m') . date('d') . date('H') . rand(10, 99) . rand(11, 99);
        }

        $transaksi = Transaksi::create([
            'user_id' => auth()->user()->id,
            'no_transaksi' =>  $make_no,
            'layanan_jenis_id' => $this->layanan_jenis_id,
            'layanan_id' => $this->layanan_id,
            'layanan_varian_items_id' => $this->layanan_varian_item_1,
            'layanan_varian_item_duas_id' => $this->layanan_varian_item_2,
            'layanan_varian_item_tigas_id' => $this->layanan_varian_item_3,
            'layanan_varian_item_empats_id' => $this->layanan_varian_item_4,
            'layanan_varian_item_limas_id' => $this->layanan_varian_item_5,
            'nama_project' => $this->nama_project,
            'keterangan' => $this->keterangan,
            'harga_layanan' => $this->harga_layanan,
            'harga_tambahan' => $this->harga_tambahan,
            'subtotal_layanan' => $this->subtotal_layanan,
            'kode_unik' => $this->kode_unik,
            'fee' => $this->fee,
            'pendapatan' => $this->pendapatan,
            'pajak' => $this->total_pajak,
            'total_pembayaran' => $this->total_pembayaran,
            'metode_pembayaran_id' => $this->metode_pembayaran_id,
            'status' => 'pending',
            'status_bayar' => 'belum bayar'
        ]);

        TransaksiLog::create([
            'transaksi_id' => $transaksi->id,
            'status' => 'pending'
        ]);

        redirect()->to('dashboard');
    }
}
