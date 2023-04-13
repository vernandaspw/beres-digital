<?php

namespace App\Http\Livewire\Public;

use App\Models\Transaksi;
use App\Models\TransaksiLog;
use Livewire\Component;

class PublicDashboard extends Component
{
    public $transaksi = [];
    public function render()
    {
        $this->transaksi = Transaksi::with('layananjenis', 'layanan')->where('user_id', auth()->user()->id)->get();
        return view('livewire.public.public-dashboard')->extends('layouts.app')->section('content');
    }


    public function dp($id)
    {
        $tr = Transaksi::find($id)->update([
            'status' => 'pay awal konfirm',
            'status_bayar' => 'lunas'
        ]);

        if ($tr) {
            TransaksiLog::create([
                'transaksi_id' => $id,
                'status' => 'pay awal konfirm'
            ]);
            session()->flash('success', 'success batal');
        }else {
            session()->flash('error', 'gagal batal');
        }
    }
}
