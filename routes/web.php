<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Barang Routes
Route::get('/barang', function () {
    return view('barang.index');
})->name('barang.index');

Route::get('/barang/create', function () {
    return view('barang.create');
})->name('barang.create');

// Pelanggan Routes
Route::get('/pelanggan', function () {
    return view('pelanggan.index');
})->name('pelanggan.index');

Route::get('/pelanggan/create', function () {
    return view('pelanggan.create');
})->name('pelanggan.create');

// Transaksi Routes
Route::get('/transaksi', function () {
    return view('transaksi.index');
})->name('transaksi.index');

Route::get('/transaksi/create', function () {
    return view('transaksi.create');
})->name('transaksi.create');

// Riwayat Routes
Route::get('/riwayat', function () {
    return view('riwayat.index');
})->name('riwayat.index');
