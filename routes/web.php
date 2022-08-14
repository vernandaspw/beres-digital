<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Daftar;
use App\Http\Livewire\Auth\Masuk;
use App\Http\Livewire\Auth\Tfa;
use App\Http\Livewire\Private\PrivateDashboard;
use App\Http\Livewire\Private\PrivateKelolaAkun;
use App\Http\Livewire\Private\PrivateKelolaLayanan;
use App\Http\Livewire\Private\PrivateKelolaLayananDetail;
use App\Http\Livewire\Private\PrivateKelolaLayananJenis;
use App\Http\Livewire\Private\PrivateKelolaPortofolio;
use App\Http\Livewire\Private\PrivateKelolaProduk;
use App\Http\Livewire\Private\PrivateTransaksi;
use App\Http\Livewire\Public\Layanan\PublicLayananDetail;
use App\Http\Livewire\Public\Layanan\PublicLayananJenis;
use App\Http\Livewire\Public\Layanan\PublicLayananJenisDetail;
use App\Http\Livewire\Public\Pesan\PublicPesan;
use App\Http\Livewire\Public\Pesan\PublicPesanSelectedHarga;
use App\Http\Livewire\Public\Portofolio\PublicPortofolio;
use App\Http\Livewire\Public\Portofolio\PublicPortofolioDetail;
use App\Http\Livewire\Public\PublicBeranda;
use App\Http\Livewire\Public\PublicCaraPesan;
use App\Http\Livewire\Public\PublicDashboard;
use App\Http\Livewire\Public\PublicKontak;
use App\Http\Livewire\Public\PublicProduk;
use App\Http\Livewire\Public\PublicProdukDetail;
use App\Http\Livewire\Public\PublicTentang;
use App\Http\Livewire\Public\PublicUbahEmail;
use App\Http\Livewire\Public\PublicUbahPassword;
use App\Http\Livewire\Public\PublicUbahProfil;
use Illuminate\Support\Facades\Route;


Route::middleware(['hastfa'])->group(function () {
    Route::get('login', Masuk::class)->name('login');
    Route::get('daftar', Daftar::class);
});
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('lupa-password', [ForgotPasswordController::class, 'showForgetPasswordForm']);
Route::post('lupa-password-send', [ForgotPasswordController::class, 'submitForgetPasswordForm']);
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm']);
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm']);

Route::get('/', PublicBeranda::class);

Route::get('produk', PublicProduk::class);
Route::get('produk/{slug}', PublicProdukDetail::class);

Route::get('layanan/jenis', PublicLayananJenis::class);
Route::get('layanan/jenis/{slug}', PublicLayananJenisDetail::class);
Route::get('layanan/{slug}', PublicLayananDetail::class);

Route::get('portofolio', PublicPortofolio::class);
Route::get('portofolio/{slug}', PublicPortofolioDetail::class);

Route::get('tentang', PublicTentang::class);
Route::get('kontak', PublicKontak::class);

Route::get('cara-pesan', PublicCaraPesan::class);

// Route::get('2fa', [App\Http\Controllers\TwoFAController::class, 'index'])->name('2fa.index');
// Route::post('2fa', [App\Http\Controllers\TwoFAController::class, 'store'])->name('2fa.post');
// Route::get('2fa/reset', [App\Http\Controllers\TwoFAController::class, 'resend'])->name('2fa.resend');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['hastfa'])->group(function () {
        Route::get('tfa', Tfa::class)->name('tfa');
    });

    Route::get('logout', [LogoutController::class, 'logout']);
    Route::middleware(['tfa'])->group(function () {


        Route::middleware(['iscustomer'])->group(function () {
            Route::get('pesan', PublicPesan::class);
            Route::get('pesan/{layananjenis}/{layanan}', PublicPesanSelectedHarga::class);

            Route::get('dashboard', PublicDashboard::class);
            Route::get('dashboard/ubah-profil', PublicUbahProfil::class);
            Route::get('dashboard/ubah-email', PublicUbahEmail::class);
            Route::get('dashboard/ubah-password', PublicUbahPassword::class);
        });

        Route::middleware(['isnotcustomer'])->group(function () {
            Route::get('admin', PrivateDashboard::class);

            Route::get('admin/kelola-project', PrivateTransaksi::class);
            Route::get('admin/kelola-akun', PrivateKelolaAkun::class);
            Route::get('admin/kelola-produk', PrivateKelolaProduk::class);
            Route::get('admin/kelola-layanan', PrivateKelolaLayanan::class);
            Route::get('admin/kelola-layanan/detail/{id}', PrivateKelolaLayananDetail::class);
            Route::get('admin/kelola-layanan/jenis', PrivateKelolaLayananJenis::class);
            Route::get('admin/kelola-portofolio', PrivateKelolaPortofolio::class);

        });
    });
});
