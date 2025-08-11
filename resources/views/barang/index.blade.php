@extends('layouts.app')

@section('title', 'Data Barang - Ahlinya Retail Store')

@section('content')
<!-- Header Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Data Barang</h1>
            <p class="text-gray-600 mt-2">Kelola informasi lengkap data barang toko</p>
        </div>
        <a href="{{ route('barang.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-300">
            <span class="mr-2">➕</span>Tambah Barang
        </a>
    </div>
</div>

<!-- Search and Filter Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex flex-col lg:flex-row gap-4">
        <div class="flex-1">
            <input type="text" placeholder="Cari barang berdasarkan nama atau kode barang..." 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex gap-2">
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Semua Kategori</option>
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
                <option value="snack">Snack</option>
                <option value="kebersihan">Kebersihan</option>
            </select>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition duration-300">
                🔍 Cari
            </button>
        </div>
    </div>
</div>

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-blue-600">1,234</div>
        <div class="text-gray-500 text-sm">Total Barang</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-green-600">42</div>
        <div class="text-gray-500 text-sm">Kategori</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-yellow-600">15</div>
        <div class="text-gray-500 text-sm">Stok Menipis</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-red-600">3</div>
        <div class="text-gray-500 text-sm">Habis</div>
    </div>
</div>

<!-- Table Section -->
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="p-6 border-b">
        <h2 class="text-xl font-semibold text-gray-900">Daftar Barang</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode & Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lokasi Rak</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!-- Sample Data Row 1 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{ getProductImage('Indomie Ayam Goreng') }}" alt="{{ getProductImageAlt('Indomie Ayam Goreng') }}" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">BR-001</div>
                        <div class="text-sm text-gray-500">Indomie Ayam Goreng</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rak A1</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">Beli: Rp 2,500</div>
                        <div class="text-sm font-medium text-gray-900">Jual: Rp 3,000</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm font-medium text-red-600">5 pcs</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                            Stok Menipis
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Edit">✏️</button>
                            <button class="text-red-600 hover:text-red-900" title="Hapus">🗑️</button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Data Row 2 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{ getProductImage('Teh Botol Sosro') }}" alt="{{ getProductImageAlt('Teh Botol Sosro') }}" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">BR-045</div>
                        <div class="text-sm text-gray-500">Teh Botol Sosro</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rak B2</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">Beli: Rp 3,500</div>
                        <div class="text-sm font-medium text-gray-900">Jual: Rp 4,500</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm font-medium text-orange-600">8 pcs</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-orange-100 text-orange-800">
                            Stok Menipis
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Edit">✏️</button>
                            <button class="text-red-600 hover:text-red-900" title="Hapus">🗑️</button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Data Row 3 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{ getProductImage('Susu Ultra Milk 250ml') }}" alt="{{ getProductImageAlt('Susu Ultra Milk 250ml') }}" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">BR-023</div>
                        <div class="text-sm text-gray-500">Susu Ultra Milk 250ml</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rak C1</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">Beli: Rp 4,000</div>
                        <div class="text-sm font-medium text-gray-900">Jual: Rp 5,500</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm font-medium text-green-600">45 pcs</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                            Tersedia
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Edit">✏️</button>
                            <button class="text-red-600 hover:text-red-900" title="Hapus">🗑️</button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Data Row 4 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{ getProductImage('Chitato Sapi Panggang') }}" alt="{{ getProductImageAlt('Chitato Sapi Panggang') }}" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">BR-112</div>
                        <div class="text-sm text-gray-500">Chitato Sapi Panggang</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rak D3</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">Beli: Rp 8,500</div>
                        <div class="text-sm font-medium text-gray-900">Jual: Rp 12,000</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm font-medium text-gray-900">25 pcs</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                            Tersedia
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Edit">✏️</button>
                            <button class="text-red-600 hover:text-red-900" title="Hapus">🗑️</button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Data Row 5 - Indomie Ayam Goreng Pedas -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{ getProductImage('Indomie Ayam Goreng Pedas') }}" alt="{{ getProductImageAlt('Indomie Ayam Goreng Pedas') }}" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">BR-002</div>
                        <div class="text-sm text-gray-500">Indomie Ayam Goreng Pedas</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rak A1</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">Beli: Rp 2,500</div>
                        <div class="text-sm font-medium text-gray-900">Jual: Rp 3,000</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm font-medium text-green-600">25 pcs</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                            Tersedia
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Edit">✏️</button>
                            <button class="text-red-600 hover:text-red-900" title="Hapus">🗑️</button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Data Row 6 - Indomie Ayam Bawang (Bukan Ayam Goreng) -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{ getProductImage('Indomie Ayam Bawang') }}" alt="{{ getProductImageAlt('Indomie Ayam Bawang') }}" class="w-full h-full object-cover">
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">BR-003</div>
                        <div class="text-sm text-gray-500">Indomie Ayam Bawang</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rak A1</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">Beli: Rp 2,500</div>
                        <div class="text-sm font-medium text-gray-900">Jual: Rp 3,000</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm font-medium text-green-600">30 pcs</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                            Tersedia
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Edit">✏️</button>
                            <button class="text-red-600 hover:text-red-900" title="Hapus">🗑️</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="bg-white px-6 py-3 border-t border-gray-200">
        <div class="flex justify-between items-center">
            <div class="text-sm text-gray-500">
                Menampilkan 1 hingga 10 dari 1,234 barang
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50">Previous</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded">1</button>
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50">2</button>
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50">3</button>
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection
