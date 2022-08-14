<?php

namespace App\Http\Livewire\Private;

use App\Models\Layanan;
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
use Livewire\Component;

class PrivateKelolaLayananDetail extends Component
{
    public $data, $layananvarian = [], $layananvarian2 = [], $layananvarian3 = [], $layananvarian4 = [], $layananvarian5 = [];

    public $nama;

    public $formTambahVariasi = false;

    public $namaVariasi, $namaVariasi2, $namaVariasi3, $namaVariasi4, $namaVariasi5;

    public $formTambahVarianItem = false, $namaVarianItem, $hargaVarianItem;
    public $formTambahVarianItem2 = false, $namaVarianItem2, $hargaVarianItem2;
    public $formTambahVarianItem3 = false, $namaVarianItem3, $hargaVarianItem3;
    public $formTambahVarianItem4 = false, $namaVarianItem4, $hargaVarianItem4;
    public $formTambahVarianItem5 = false, $namaVarianItem5, $hargaVarianItem5;

    public function mount($id)
    {
        $this->data = Layanan::find($id);
        $this->nama = $this->data->nama;
    }

    public function render()
    {
        $this->layananvarian = LayananVarian::with('items')->where('layanan_id', $this->data->id)->first();
        $this->layananvarian2 = LayananVarianDua::with('items')->where('layanan_id', $this->data->id)->first();
        $this->layananvarian3 = LayananVarianTiga::with('items')->where('layanan_id', $this->data->id)->first();
        $this->layananvarian4 = LayananVarianEmpat::with('items')->where('layanan_id', $this->data->id)->first();
        $this->layananvarian5 = LayananVarianLima::with('items')->where('layanan_id', $this->data->id)->first();
        return view('livewire.private.private-kelola-layanan-detail')->extends('layouts.app')->section('content');
    }


    public function tambahVariasi()
    {
        LayananVarian::create([
            'layanan_id' => $this->data->id,
            'nama' => $this->namaVariasi,
        ]);
        session()->flash('success', 'Berhasil tambah varian baru');
    }
    public function tambahVariasi2()
    {
        LayananVarianDua::create([
            'layanan_id' => $this->data->id,
            'nama' => $this->namaVariasi2,
        ]);
        session()->flash('success', 'Berhasil tambah varian baru');
    }
    public function tambahVariasi3()
    {
        LayananVarianTiga::create([
            'layanan_id' => $this->data->id,
            'nama' => $this->namaVariasi3,
        ]);
        session()->flash('success', 'Berhasil tambah varian baru');
    }
    public function tambahVariasi4()
    {
        LayananVarianEmpat::create([
            'layanan_id' => $this->data->id,
            'nama' => $this->namaVariasi4,
        ]);
        session()->flash('success', 'Berhasil tambah varian baru');
    }
    public function tambahVariasi5()
    {
        LayananVarianLima::create([
            'layanan_id' => $this->data->id,
            'nama' => $this->namaVariasi5,
        ]);
        session()->flash('success', 'Berhasil tambah varian baru');
    }


    public function formTambahVarianItem($id)
    {
        if ($this->formTambahVarianItem == false) {
            $this->formTambahVarianItem = true;
        } else {
            $this->formTambahVarianItem = false;
        }
    }
    public function tambahVarianItem($id)
    {
        LayananVarianItem::create([
            'layanan_varian_id' => $id,
            'nama' => $this->namaVarianItem,
            'harga' => $this->hargaVarianItem,
        ]);

        $this->namaVarianItem = null;
        $this->hargaVarianItem = null;
        $this->formTambahVarianItem = false;
        session()->flash('success', 'Berhasil tambah pilihan item baru');
    }
    public function tutup()
    {
        $this->formTambahVarianItem = false;

        $this->namaVarianItem = null;
        $this->hargaVarianItem = null;
    }


    public function formTambahVarianItem2($id)
    {
        if ($this->formTambahVarianItem2 == false) {
            $this->formTambahVarianItem2 = true;
        } else {
            $this->formTambahVarianItem2 = false;
        }
    }
    public function tambahVarianItem2($id)
    {
        LayananVarianItemDua::create([
            'layanan_varian_dua_id' => $id,
            'nama' => $this->namaVarianItem2,
            'harga' => $this->hargaVarianItem2,
        ]);

        $this->namaVarianItem2 = null;
        $this->hargaVarianItem2 = null;
        $this->formTambahVarianItem2 = false;
        session()->flash('success', 'Berhasil tambah pilihan item baru');
    }
    public function tutup2()
    {
        $this->formTambahVarianItem2 = false;

        $this->namaVarianItem2 = null;
        $this->hargaVarianItem2 = null;
    }


    public function formTambahVarianItem3($id)
    {
        if ($this->formTambahVarianItem3 == false) {
            $this->formTambahVarianItem3 = true;
        } else {
            $this->formTambahVarianItem3 = false;
        }
    }
    public function tambahVarianItem3($id)
    {
        LayananVarianItemTiga::create([
            'layanan_varian_tiga_id' => $id,
            'nama' => $this->namaVarianItem3,
            'harga' => $this->hargaVarianItem3,
        ]);

        $this->namaVarianItem3 = null;
        $this->hargaVarianItem3 = null;
        $this->formTambahVarianItem3 = false;
        session()->flash('success', 'Berhasil tambah pilihan item baru');
    }
    public function tutup3()
    {
        $this->formTambahVarianItem3 = false;

        $this->namaVarianItem3 = null;
        $this->hargaVarianItem3 = null;
    }



    public function formTambahVarianItem4($id)
    {
        if ($this->formTambahVarianItem4 == false) {
            $this->formTambahVarianItem4 = true;
        } else {
            $this->formTambahVarianItem4 = false;
        }
    }
    public function tambahVarianItem4($id)
    {
        LayananVarianItemEmpat::create([
            'layanan_varian_empat_id' => $id,
            'nama' => $this->namaVarianItem4,
            'harga' => $this->hargaVarianItem4,
        ]);

        $this->namaVarianItem4 = null;
        $this->hargaVarianItem4 = null;
        $this->formTambahVarianItem4 = false;
        session()->flash('success', 'Berhasil tambah pilihan item baru');
    }
    public function tutup4()
    {
        $this->formTambahVarianItem4 = false;

        $this->namaVarianItem4 = null;
        $this->hargaVarianItem4 = null;
    }


    public function formTambahVarianItem5($id)
    {
        if ($this->formTambahVarianItem5 == false) {
            $this->formTambahVarianItem5 = true;
        } else {
            $this->formTambahVarianItem5 = false;
        }
    }
    public function tambahVarianItem5($id)
    {
        LayananVarianItemLima::create([
            'layanan_varian_lima_id' => $id,
            'nama' => $this->namaVarianItem5,
            'harga' => $this->hargaVarianItem5,
        ]);

        $this->namaVarianItem5 = null;
        $this->hargaVarianItem5 = null;
        $this->formTambahVarianItem5 = false;
        session()->flash('success', 'Berhasil tambah pilihan item baru');
    }
    public function tutup5()
    {
        $this->formTambahVarianItem5 = false;

        $this->namaVarianItem5 = null;
        $this->hargaVarianItem5 = null;
    }
}
