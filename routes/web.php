<?php

use App\Http\Livewire\Public\PublicBeranda;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('layouts.app');
// });

// Route::get('login', PublicBeranda::class);

Route::get('/', PublicBeranda::class);
