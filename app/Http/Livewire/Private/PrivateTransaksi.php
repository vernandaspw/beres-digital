<?php

namespace App\Http\Livewire\Private;

use App\Models\Transaksi;
use App\Models\TransaksiLog;
use Livewire\Component;

class PrivateTransaksi extends Component
{
    public $transaksi = [];

    public $take = 20;

    public function lanjut()
    {
        $this->take = $this->take + 10;
    }

    public function render()
    {
        $this->transaksi = Transaksi::with('layananjenis', 'layanan', 'user')->take($this->take)->get();
        return view('livewire.private.private-transaksi')->extends('layouts.app')->section('content');
    }

    public function approve($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'approve'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'approve'
            ]);
            session()->flash('success', 'success approve');
        }else {
            session()->flash('error', 'gagal approve');
        }
    }

    public function batal($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'batal'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'batal'
            ]);
            session()->flash('success', 'success batal');
        }else {
            session()->flash('error', 'gagal batal');
        }
    }

    public function tagih_pay_awal($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'pay awal'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'pay awal'
            ]);
            session()->flash('success', 'success ');
        }else {
            session()->flash('error', 'gagal ');
        }
    }

    public function sudah_bayar_awal($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'pay awal true'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'pay awal true'
            ]);
            session()->flash('success', 'success ');
        }else {
            session()->flash('error', 'gagal ');
        }
    }

    public function pengerjaan($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'pengerjaan'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'pengerjaan'
            ]);
            session()->flash('success', 'success ');
        }else {
            session()->flash('error', 'gagal ');
        }
    }

    public function selesai_dikerjakan($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'selesai dikerjakan'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'selesai dikerjakan'
            ]);
            session()->flash('success', 'success ');
        }else {
            session()->flash('error', 'gagal ');
        }
    }

    public function review($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'review'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'review'
            ]);
            session()->flash('success', 'success ');
        }else {
            session()->flash('error', 'gagal ');
        }
    }
    public function revisi($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'revisi'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'revisi'
            ]);
            session()->flash('success', 'success ');
        }else {
            session()->flash('error', 'gagal ');
        }
    }

    public function penyerahan($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'penyerahan'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'penyerahan'
            ]);
            session()->flash('success', 'success ');
        }else {
            session()->flash('error', 'gagal ');
        }
    }

    public function tagih_sisa_pembayaran($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'pay akhir'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'pay akhir'
            ]);
            session()->flash('success', 'success ');
        }else {
            session()->flash('error', 'gagal ');
        }
    }

    public function pay_akhir_sdh_konfirm($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'pay akhir true'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'pay akhir true'
            ]);
            session()->flash('success', 'success');
        }else {
            session()->flash('error', 'gagal');
        }
    }

    public function selesai($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'selesai'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'selesai'
            ]);
            session()->flash('success', 'success ');
        }else {
            session()->flash('error', 'gagal ');
        }
    }
}
