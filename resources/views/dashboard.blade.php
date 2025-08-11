@extends('layouts.app')

@section('title', 'Dashboard - Ahlinya Retail Store')

@section('content')
<!-- Header Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
            <p class="text-gray-600 mt-2">Selamat datang di Ahlinya Retail Store</p>
        </div>
        <div class="text-right">
            <p class="text-sm text-gray-500">{{ date('d F Y') }}</p>
            <p class="text-sm text-gray-500">{{ date('H:i') }} WIB</p>
        </div>
    </div>
</div>

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Barang -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="ml-4">
                <p class="text-gray-500 text-sm">Total Barang</p>
                <p class="text-2xl font-semibold text-gray-900">1,234</p>
            </div>
        </div>
    </div>

    <!-- Total Pelanggan -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="ml-4">
                <p class="text-gray-500 text-sm">Total Pelanggan</p>
                <p class="text-2xl font-semibold text-gray-900">856</p>
            </div>
        </div>
    </div>

    <!-- Transaksi Hari Ini -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="ml-4">
                <p class="text-gray-500 text-sm">Transaksi Hari Ini</p>
                <p class="text-2xl font-semibold text-gray-900">42</p>
            </div>
        </div>
    </div>

    <!-- Penjualan Hari Ini -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="ml-4">
                <p class="text-gray-500 text-sm">Penjualan Hari Ini</p>
                <p class="text-2xl font-semibold text-gray-900">2.5M</p>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <h2 class="text-xl font-semibold text-gray-900 mb-4">Aksi Cepat</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <a href="{{ route('transaksi.create') }}" class="flex items-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition duration-300">
            <span class="text-blue-600 text-2xl mr-3">🛒</span>
            <div>
                <p class="font-medium text-blue-900">Transaksi Baru</p>
                <p class="text-sm text-blue-600">Buat transaksi penjualan</p>
            </div>
        </a>

        <a href="{{ route('barang.create') }}" class="flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition duration-300">
            <span class="text-green-600 text-2xl mr-3">➕</span>
            <div>
                <p class="font-medium text-green-900">Tambah Barang</p>
                <p class="text-sm text-green-600">Input barang baru</p>
            </div>
        </a>

        <a href="{{ route('pelanggan.create') }}" class="flex items-center p-4 bg-yellow-50 rounded-lg hover:bg-yellow-100 transition duration-300">
            <span class="text-yellow-600 text-2xl mr-3">👤</span>
            <div>
                <p class="font-medium text-yellow-900">Daftar Pelanggan</p>
                <p class="text-sm text-yellow-600">Tambah pelanggan baru</p>
            </div>
        </a>

        <a href="{{ route('riwayat.index') }}" class="flex items-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition duration-300">
            <span class="text-purple-600 text-2xl mr-3">📊</span>
            <div>
                <p class="font-medium text-purple-900">Lihat Laporan</p>
                <p class="text-sm text-purple-600">Riwayat transaksi</p>
            </div>
        </a>
    </div>
</div>

<!-- Recent Activities -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Transaksi Terbaru -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-900">Transaksi Terbaru</h3>
            <a href="{{ route('riwayat.index') }}" class="text-blue-600 text-sm hover:underline">Lihat Semua</a>
        </div>
        <div class="space-y-3">
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-900">TRX-2025-0001</p>
                    <p class="text-sm text-gray-500">Budi Santoso - Member</p>
                </div>
                <div class="text-right">
                    <p class="font-medium text-green-600">Rp 125,000</p>
                    <p class="text-sm text-gray-500">10:30 WIB</p>
                </div>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-900">TRX-2025-0002</p>
                    <p class="text-sm text-gray-500">Siti Aminah - Biasa</p>
                </div>
                <div class="text-right">
                    <p class="font-medium text-green-600">Rp 78,500</p>
                    <p class="text-sm text-gray-500">11:15 WIB</p>
                </div>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-900">TRX-2025-0003</p>
                    <p class="text-sm text-gray-500">Ahmad Fauzi - Member</p>
                </div>
                <div class="text-right">
                    <p class="font-medium text-green-600">Rp 95,250</p>
                    <p class="text-sm text-gray-500">12:00 WIB</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Stok Menipis -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-900">Stok Menipis</h3>
            <a href="{{ route('barang.index') }}" class="text-blue-600 text-sm hover:underline">Lihat Semua</a>
        </div>
        <div class="space-y-3">
            <div class="flex items-center justify-between p-3 bg-red-50 rounded-lg border-l-4 border-red-400">
                <div>
                    <p class="font-medium text-gray-900">Indomie Ayam Goreng</p>
                    <p class="text-sm text-gray-500">BR-001 - Rak A1</p>
                </div>
                <div class="text-right">
                    <p class="font-medium text-red-600">5 pcs</p>
                    <p class="text-sm text-gray-500">Min: 10 pcs</p>
                </div>
            </div>
            <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg border-l-4 border-orange-400">
                <div>
                    <p class="font-medium text-gray-900">Teh Botol Sosro</p>
                    <p class="text-sm text-gray-500">BR-045 - Rak B2</p>
                </div>
                <div class="text-right">
                    <p class="font-medium text-orange-600">8 pcs</p>
                    <p class="text-sm text-gray-500">Min: 15 pcs</p>
                </div>
            </div>
            <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg border-l-4 border-yellow-400">
                <div>
                    <p class="font-medium text-gray-900">Susu Ultra Milk</p>
                    <p class="text-sm text-gray-500">BR-023 - Rak C1</p>
                </div>
                <div class="text-right">
                    <p class="font-medium text-yellow-600">12 pcs</p>
                    <p class="text-sm text-gray-500">Min: 20 pcs</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
