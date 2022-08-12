<?php

namespace App\Http\Livewire\Private;

use App\Models\Layanan;
use App\Models\LayananVarian;
use App\Models\LayananVarianItem;
use Livewire\Component;

class PrivateKelolaLayananDetail extends Component
{
    public $data, $layananvarian;

    public $nama;

    public $formTambahVariasi = false;

    public $namaVariasi, $keteranganVariasi;

    public $formTambahVarianItem = false, $VarianID;
    public $namaVarianItem, $hargaVarianItem;

    public function mount($id)
    {
        $this->data = Layanan::find($id);
        
        $this->nama = $this->data->nama;
    }

    public function render()
    {
        $this->layananvarian = LayananVarian::with('layananvarianitem')->where('layanan_id', $this->data->id)->orderBy('urut', 'desc')->get();
        return view('livewire.private.private-kelola-layanan-detail')->extends('layouts.app')->section('content');
    }

    public function formTambahVariasi()
    {
        $this->formTambahVariasi = true;
    }

    public function tambahVariasi()
    {
        LayananVarian::create([
            'layanan_id' => $this->data->id,
            'nama' => $this->namaVariasi,
            'keterangan' => $this->keteranganVariasi
        ]);

        session()->flash('success', 'Berhasil tambah varian baru');
    }

    public function formTambahVarianItem($id)
    {
        $this->formTambahVarianItem = true;
        $this->formTambahVarian = false;

        $this->VarianID = $id;
    }

    public function tambahVarianItem($VarianID)
    {
        LayananVarianItem::create([
            'layanan_id' => $this->data->id,
            'layanan_varian_id' => $VarianID,
            'nama' => $this->namaVarianItem,
            'harga' => $this->hargaVarianItem,
        ]);

        session()->flash('success', 'Berhasil tambah varian item baru');
    }

}
