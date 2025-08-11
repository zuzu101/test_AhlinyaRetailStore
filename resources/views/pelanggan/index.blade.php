@extends('layouts.app')

@section('title', 'Data Pelanggan - Ahlinya Retail Store')

@section('content')
<!-- Header Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Data Pelanggan</h1>
            <p class="text-gray-600 mt-2">Kelola informasi pelanggan member dan pelanggan biasa</p>
        </div>
        <a href="{{ route('pelanggan.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-300">
            <span class="mr-2">👤</span>Daftar Pelanggan
        </a>
    </div>
</div>

<!-- Search and Filter Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex flex-col lg:flex-row gap-4">
        <div class="flex-1">
            <input type="text" placeholder="Cari pelanggan berdasarkan nama atau nomor telepon..." 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex gap-2">
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Semua Status</option>
                <option value="member">Member</option>
                <option value="biasa">Pelanggan Biasa</option>
                <option value="pending">Pending Member</option>
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
        <div class="text-2xl font-bold text-blue-600">856</div>
        <div class="text-gray-500 text-sm">Total Pelanggan</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-green-600">324</div>
        <div class="text-gray-500 text-sm">Member Aktif</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-yellow-600">532</div>
        <div class="text-gray-500 text-sm">Pelanggan Biasa</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-red-600">12</div>
        <div class="text-gray-500 text-sm">Tunggakan</div>
    </div>
</div>

<!-- Table Section -->
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="p-6 border-b">
        <h2 class="text-xl font-semibold text-gray-900">Daftar Pelanggan</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama & Kontak</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Transaksi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bergabung</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!-- Sample Data Row 1 - Member Active -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 font-semibold">BS</span>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Budi Santoso</div>
                                <div class="text-sm text-gray-500">0812-3456-7890</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jl. Kebon Jeruk No. 123</div>
                        <div class="text-sm text-gray-500">RT 05/RW 02, Jakarta Barat</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                            👑 Member
                        </span>
                        <div class="text-xs text-gray-500 mt-1">Iuran: ✅ Lunas</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">47 transaksi</div>
                        <div class="text-sm text-gray-500">Rp 2,350,000</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        15 Jan 2024
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Edit">✏️</button>
                            <button class="text-purple-600 hover:text-purple-900" title="Riwayat">📋</button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Data Row 2 - Member with Outstanding Payment -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                <span class="text-yellow-600 font-semibold">SA</span>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Siti Aminah</div>
                                <div class="text-sm text-gray-500">0813-9876-5432</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jl. Mangga Besar Raya No. 45</div>
                        <div class="text-sm text-gray-500">RT 08/RW 03, Jakarta Pusat</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            ⚠️ Member
                        </span>
                        <div class="text-xs text-red-500 mt-1">Iuran: 1x telat</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">23 transaksi</div>
                        <div class="text-sm text-gray-500">Rp 1,125,000</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        03 Feb 2024
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Edit">✏️</button>
                            <button class="text-red-600 hover:text-red-900" title="Tagihan">💳</button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Data Row 3 - Regular Customer -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                                <span class="text-gray-600 font-semibold">AF</span>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Ahmad Fauzi</div>
                                <div class="text-sm text-gray-500">0821-1234-5678</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jl. Sudirman No. 67</div>
                        <div class="text-sm text-gray-500">RT 12/RW 04, Jakarta Selatan</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
                            👤 Biasa
                        </span>
                        <div class="text-xs text-blue-500 mt-1">
                            <button class="hover:underline">Upgrade Member</button>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">12 transaksi</div>
                        <div class="text-sm text-gray-500">Rp 485,000</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        28 Mar 2024
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Edit">✏️</button>
                            <button class="text-purple-600 hover:text-purple-900" title="Upgrade">⬆️</button>
                        </div>
                    </td>
                </tr>

                <!-- Sample Data Row 4 - Member at Risk -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                                <span class="text-red-600 font-semibold">DP</span>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Dewi Permata</div>
                                <div class="text-sm text-gray-500">0856-7890-1234</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jl. Cempaka Putih No. 89</div>
                        <div class="text-sm text-gray-500">RT 07/RW 01, Jakarta Utara</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                            🚨 Risiko
                        </span>
                        <div class="text-xs text-red-500 mt-1">Iuran: 2x telat</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">34 transaksi</div>
                        <div class="text-sm text-gray-500">Rp 1,890,000</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        10 Dec 2023
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Edit">✏️</button>
                            <button class="text-red-600 hover:text-red-900" title="Downgrade">⬇️</button>
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
                Menampilkan 1 hingga 10 dari 856 pelanggan
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

<!-- Member Info Panel -->

@endsection
