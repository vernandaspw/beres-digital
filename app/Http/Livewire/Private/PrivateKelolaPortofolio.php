<?php

namespace App\Http\Livewire\Private;

use App\Models\Layanan;
use Livewire\Component;
use App\Models\Portofolio;
use Illuminate\Support\Str;
use App\Models\LayananJenis;
use App\Models\PortofolioGaleri;
use Livewire\WithFileUploads;

class PrivateKelolaPortofolio extends Component
{
    use WithFileUploads;
    public $porto = [], $jenis = [], $layanan = [];

    public $formTambah = false;

    public $gambar=[];

    public $nama, $jenis_id, $layanan_id, $tentang, $alat, $proses, $tantangan, $hasil;

    public function render()
    {
        $this->porto = Portofolio::with('galeris', 'layananjenis', 'layanan')->latest()->get();
        $this->jenis = LayananJenis::latest()->get();
        $this->layanan = Layanan::latest()->get();

        return view('livewire.private.private-kelola-portofolio')->extends('layouts.app')->section('content');
    }

    public function tutup()
    {
        $this->formTambah = false;
    }

    public function formTambah()
    {
        $this->formTambah = true;
    }

    public function tambah()
    {
        $buat = Portofolio::create([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama, '-'),
            'layanan_jenis_id' => $this->jenis_id,
            'layanan_id' => $this->layanan_id,
            'tentang' => $this->tentang,
            'alat' => $this->alat,
            'proses' => $this->proses,
            'tantangan' => $this->tantangan,
            'hasil' => $this->hasil,
        ]);

        if ($buat) {
            if ($this->gambar != 'null') {
                foreach ($this->gambar as $data) {
                    $gambar = $data->store('image/portofolio');
                    PortofolioGaleri::create([
                        'portofolio_id' => $buat->id,
                        'gambar' => $gambar
                    ]);
                }
            }

            session()->flash('success', 'berhhasil tambah');
        }else {
            session()->flash('error', 'gagal tambah');
        }
    }
}
