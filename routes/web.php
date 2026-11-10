<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;



Route::get('/', function () {
    return view('layouts.app');
});
Route::resource('kategori', KategoriController::class);
Route::resource('lokasi', \App\Http\Controllers\LokasiController::class);
Route::resource('barang', \App\Http\Controllers\BarangController::class);
