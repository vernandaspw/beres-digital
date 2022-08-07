<?php

namespace App\Http\Livewire\Private;

use App\Models\Produk;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use PhpParser\Node\Stmt\TryCatch;

class PrivateKelolaProduk extends Component
{
    use WithFileUploads;

    public $gambar;
    public $nama, $singkat, $keterangan, $link, $urut, $istersedia = true;

    public $produk;

    public $tambah = false;


    public function formtambah()
    {
        $this->tambah = true;
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

    public function formtutup()
    {
        $this->tambah = false;
        $this->edit = false;

        $this->resetNull();
    }

    public function render()
    {
        $this->produk = Produk::orderBy('urut', 'desc')->get();

        return view('livewire.private.private-kelola-produk')->extends('layouts.app')->section('content');
    }

    public function tambah()
    {
        $this->validate([
            'gambar' => 'nullable|image|max:2038',
            'nama' => 'required|max:150|unique:produks,nama',
            'singkat' => 'required',
            'keterangan' => 'nullable',
            'link' => 'required|max:100',
        ]);

        try {
            dd([
                'gambar' => $this->gambar,
                'nama' => $this->nama,
                'slug' => Str::slug($this->nama, '-'),
                'singkat' => $this->singkat,
                'keterangan' => $this->keterangan,
                'link' => $this->link,
            ]);

            if ($this->gambar) {
                $gambar = $this->gambar->store('produk', 's3');
            }



            $tambah = Produk::create([
                'gambar' => $gambar,
                'nama' => $this->nama,
                'slug' => Str::slug($this->nama, '-'),
                'singkat' => $this->singkat,
                'keterangan' => $this->keterangan,
                'link' => $this->link,
            ]);

            $this->resetNull();

            session()->flash('success', 'berhasil tambah data');
        } catch (\Exception $e) {
            session()->flash('error', $e);
        }
    }
}
