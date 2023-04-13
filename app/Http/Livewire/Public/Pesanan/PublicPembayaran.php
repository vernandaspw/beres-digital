<?php

namespace App\Http\Livewire\Public\Pesanan;

use App\Models\DataRekening;
use App\Models\MetodePembayaran;
use App\Models\Transaksi;
use App\Models\TransaksiLog;
use Livewire\Component;

class PublicPembayaran extends Component
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

        return view('livewire.public.pesanan.public-pembayaran')->extends('layouts.app')->section('content');
    }

    public function dp()
    {
        $this->validate([
            'jumlah_bayar' => 'required'
        ]);

        $total = $this->data->total_pembayaran;
        $tengah = $total / 2;
        if ($this->jumlah_bayar >= $tengah) {
            $t = Transaksi::find($this->data->id)->update([
                'dp' => $this->jumlah_bayar,
                'status' => 'pay awal konfirm',
                'status_bayar' => 'dp'
            ]);

            if ($t) {
                TransaksiLog::create([
                    'transaksi_id' => $this->data->id,
                    'status' => 'pay awal konfirm'
                ]);

                session()->flash('success', 'berhasil membayar');
            }else {
                session()->flash('error', 'gagal bayar');
            }
        }elseif ($this->jumlah_bayar == $total) {
            $t = Transaksi::find($this->data->id)->update([
                'dp' => $this->data->total_pembayaran,
                'status' => 'pay awal konfirm',
                'status_bayar' => 'lunas'
            ]);

            if ($t) {
                TransaksiLog::create([
                    'transaksi_id' => $this->data->id,
                    'status' => 'pay awal konfirm'
                ]);

                redirect()->to('dashboard/pesanan/pembayaran/'. $this->data->no_transaksi);
                session()->flash('success', 'berhasil membayar');
            }else {
                session()->flash('error', 'gagal bayar');
            }
        }elseif ($this->jumlah_bayar < $tengah) {
            session()->flash('error', 'minimal pembayaran 50% dari total tagihan');
        }
    }

    public function lunas()
    {
        $t = Transaksi::find($this->data->id)->update([
            'dp' => $this->data->total_pembayaran,
            'status' => 'pay awal konfirm',
            'status_bayar' => 'lunas'
        ]);

        if ($t) {
            TransaksiLog::create([
                'transaksi_id' => $this->data->id,
                'status' => 'pay awal konfirm'
            ]);
            redirect()->to('dashboard/pesanan/pembayaran/'. $this->data->no_transaksi);
            session()->flash('success', 'berhasil membayar');
        }else {
            session()->flash('error', 'gagal bayar');
        }
    }
}
