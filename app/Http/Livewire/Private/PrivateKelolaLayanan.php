<?php

namespace App\Http\Livewire\Private;

use App\Models\Layanan;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\LayananJenis;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class PrivateKelolaLayanan extends Component
{
    use WithFileUploads;
    
    public $layanan, $jenis;

    public $nama, $gambar, $singkat, $keterangan, $harga, $jenis_id;

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
        $this->harga = null;
        $this->jenis_id = null;
    }

    public function formtutup()
    {
        $this->tambah = false;
        $this->edit = false;

        $this->resetNull();
    }

    public function render()
    {
        $this->layanan = Layanan::with('layananjenis')->orderBy('urut', 'desc')->get();
        $this->jenis = LayananJenis::where('istersedia', true)->orderBy('urut', 'desc')->get();

        return view('livewire.private.private-kelola-layanan')->extends('layouts.app')->section('content');
    }

    public function tambah()
    {
        $this->validate([
            'gambar' => 'nullable|image|max:2038',
            'nama' => 'required|max:150|unique:layanans,nama',
            'singkat' => 'required',
            'keterangan' => 'nullable',
            'harga' => 'required'
        ]);


        if ($this->gambar) {
            $gambar = $this->gambar->store('image/layanan');
        } else {
            $gambar = null;
        }
     
        try {
            $tambah = Layanan::create([
                'gambar' => $gambar,
                'nama' => $this->nama,
                'slug' => Str::slug($this->nama, '-'),
                'singkat' => $this->singkat,
                'keterangan' => $this->keterangan,
                'harga' => $this->harga,
                'layanan_jenis_id' => $this->jenis_id
            ]);
     
            if ($tambah) {
                $this->resetNull();
                session()->flash('success', 'berhasil tambah data');
           
            }else {
                
            }

            
        } catch (\Throwable $th) {
            Storage::delete($gambar);
            dd($th);
        }
    }
}
