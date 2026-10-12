<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', [BarangController::class, 'dashboard'])->name('dashboard');
Route::resource('barang', BarangController::class)->except('show');
