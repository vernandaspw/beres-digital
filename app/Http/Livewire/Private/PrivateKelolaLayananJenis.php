<?php

namespace App\Http\Livewire\Private;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\LayananJenis;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class PrivateKelolaLayananJenis extends Component
{
    use WithFileUploads;

    public $jenis;

    public $nama, $gambar, $singkat, $keterangan;

    public $tambah = false;


    public function formtambah()
    {
        $this->tambah = true;
        $this->edit = false;
    }

    public function resetNull()
    {
        $this->nama = null;
        $this->gambar = null;
        $this->singkat = null;
        $this->keterangan = null;
    }

    public function formtutup()
    {
        $this->tambah = false;
        $this->edit = false;

        $this->resetNull();
    }

    public function render()
    {
        $this->jenis = LayananJenis::where('istersedia', true)->get();
        return view('livewire.private.private-kelola-layanan-jenis')->extends('layouts.app')->section('content');
    }

    public function tambah()
    {
        $this->validate([
            'gambar' => 'nullable|image|max:2038',
            'nama' => 'required|max:150|unique:layanan_jenis,nama',
            'singkat' => 'required',
            'keterangan' => 'nullable'
        ]);


        if ($this->gambar) {
            $gambar = $this->gambar->store('image/layanan');
        } else {
            $gambar = null;
        }

        try {
            $tambah = LayananJenis::create([
                'gambar' => $gambar,
                'nama' => $this->nama,
                'slug' => Str::slug($this->nama, '-'),
                'singkat' => $this->singkat,
                'keterangan' => $this->keterangan
            ]);

            $this->resetNull();
            return session()->flash('success', 'berhasil tambah data');
        } catch (\Throwable $th) {
            Storage::delete($gambar);
            dd($th);
        }
    }
}
