<?php

namespace App\Http\Livewire\Private;

use App\Models\Produk;
use Livewire\Component;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\TryCatch;

class PrivateKelolaProduk extends Component
{
    public $produk;

    public $tambah = false;


    public $gambar, $nama, $singkat, $keterangan, $link, $urut, $istersedia;

    public function formtambah()
    {
        $this->tambah = true;
        $this->edit = false;
    }
    public function formtutup()
    {
        $this->tambah = false;
        $this->edit = false;
    }

    public function resetNull()
    {
        $this->gambar = null;
        $this->nama = null;
        $this->singkat = null;
        $this->keterangan = null;
        $this->link = null;
        $this->urut = null;
        $this->istersedia = null;
    }

    public function render()
    {
        $this->produk = Produk::orderBy('urut', 'desc')->get();

        return view('livewire.private.private-kelola-produk')->extends('layouts.app')->section('content');
    }

    public function tambah()
    {
        $this->validate([
            'gambar' => 'nullable',
            'nama' => 'required|max:150|unique:produks,nama',
            'slug' => '',
            'singkat' => 'required',
            'keterangan' => 'nullable',
            'link' => 'required|max:100',
            'urut' => '',
            'istersedia' => ''
        ]);

        try {
            $tambah = Produk::create([
                'gambar' => $this->gambar,
                'nama' => $this->nama,
                'slug' => Str::slug($this->nama, '-'),
                'singkat' => $this->singkat,
                'keterangan' => $this->keterangan,
                'link' => $this->link,
            ]);

            $this->emit('resetNull');

            session()->flash('success', 'berhasil tambah data');
        } catch (\Exception $e) {
            session()->flash('error', $e);
        }
    }
}
