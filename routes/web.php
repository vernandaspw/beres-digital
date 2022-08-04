<?php

use App\Http\Livewire\Auth\Daftar;
use App\Http\Livewire\Auth\Masuk;
use App\Http\Livewire\Public\Layanan\PublicLayananDetail;
use App\Http\Livewire\Public\Layanan\PublicLayananJenis;
use App\Http\Livewire\Public\Layanan\PublicLayananJenisDetail;
use App\Http\Livewire\Public\Pesan\PublicPesan;
use App\Http\Livewire\Public\Pesan\PublicPesanSelectedHarga;
use App\Http\Livewire\Public\Portofolio\PublicPortofolio;
use App\Http\Livewire\Public\Portofolio\PublicPortofolioDetail;
use App\Http\Livewire\Public\PublicBeranda;
use App\Http\Livewire\Public\PublicDashboard;
use App\Http\Livewire\Public\PublicProduk;
use App\Http\Livewire\Public\PublicProdukDetail;
use App\Http\Livewire\Public\PublicTentang;
use App\Http\Livewire\Public\PublicUbahEmail;
use App\Http\Livewire\Public\PublicUbahPassword;
use App\Http\Livewire\Public\PublicUbahProfil;
use Illuminate\Support\Facades\Route;


Route::get('login', Masuk::class)->name('login');
Route::get('daftar', Daftar::class);

Route::get('/', PublicBeranda::class);

Route::get('produk', PublicProduk::class);
Route::get('produk/{slug}', PublicProdukDetail::class);

Route::get('layanan/jenis', PublicLayananJenis::class);
Route::get('layanan/jenis/{slug}', PublicLayananJenisDetail::class);
Route::get('layanan/{slug}', PublicLayananDetail::class);

Route::get('portofolio', PublicPortofolio::class);
Route::get('portofolio/{slug}', PublicPortofolioDetail::class);

Route::get('tentang', PublicTentang::class);

Route::middleware(['auth'])->group(function () {
    Route::get('pesan', PublicPesan::class);
    Route::get('pesan/{layananjenis}/{layanan}/{layananharga}', PublicPesanSelectedHarga::class);

    Route::get('dashboard', PublicDashboard::class);
    Route::get('dashboard/ubah-profil', PublicUbahProfil::class);
    Route::get('dashboard/ubah-email', PublicUbahEmail::class);
    Route::get('dashboard/ubah-password', PublicUbahPassword::class);

    Route::get('admin', PublicDashboard::class);

});
