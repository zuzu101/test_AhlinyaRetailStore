@extends('layouts.app')

@section('title', 'Transaksi - Ahlinya Retail Store')

@section('content')
<!-- Header Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Transaksi Penjualan</h1>
            <p class="text-gray-600 mt-2">Kelola transaksi penjualan dan kasir</p>
        </div>
        <a href="{{ route('transaksi.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-300">
            <span class="mr-2">🛒</span>Transaksi Baru
        </a>
    </div>
</div>

<!-- Quick Stats -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-blue-600">42</div>
        <div class="text-gray-500 text-sm">Transaksi Hari Ini</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-green-600">Rp 2.5M</div>
        <div class="text-gray-500 text-sm">Total Penjualan</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-yellow-600">Rp 59K</div>
        <div class="text-gray-500 text-sm">Rata-rata/Transaksi</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-4 text-center">
        <div class="text-2xl font-bold text-purple-600">18</div>
        <div class="text-gray-500 text-sm">Member Discount</div>
    </div>
</div>

<!-- Filter Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex flex-col lg:flex-row gap-4">
        <div class="flex-1">
            <input type="text" placeholder="Cari berdasarkan nomor transaksi, nama pelanggan..." 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex gap-2">
            <input type="date" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Semua Status</option>
                <option value="selesai">Selesai</option>
                <option value="pending">Pending</option>
                <option value="dibatalkan">Dibatalkan</option>
            </select>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition duration-300">
                🔍 Cari
            </button>
        </div>
    </div>
</div>

<!-- Transaction List -->
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="p-6 border-b">
        <h2 class="text-xl font-semibold text-gray-900">Daftar Transaksi Hari Ini</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Transaksi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pelanggan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pembayaran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!-- Transaction 1 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">TRX-2025-0042</div>
                        <div class="text-sm text-green-600">✅ Selesai</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-xs font-semibold">BS</span>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm font-medium text-gray-900">Budi Santoso</div>
                                <div class="text-sm text-blue-600">👑 Member</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">7 item</div>
                        <div class="text-sm text-gray-500">Indomie, Teh Botol, Susu...</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">Rp 125,000</div>
                        <div class="text-sm text-green-600">Diskon: Rp 6,250</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Cash</div>
                        <div class="text-sm text-gray-500">Kembalian: Rp 5,000</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        15:45
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Print">🖨️</button>
                            <button class="text-purple-600 hover:text-purple-900" title="Email">📧</button>
                        </div>
                    </td>
                </tr>

                <!-- Transaction 2 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">TRX-2025-0041</div>
                        <div class="text-sm text-green-600">✅ Selesai</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                <span class="text-gray-600 text-xs font-semibold">SA</span>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm font-medium text-gray-900">Siti Aminah</div>
                                <div class="text-sm text-gray-600">👤 Biasa</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">3 item</div>
                        <div class="text-sm text-gray-500">Chitato, Coca Cola, Roti</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">Rp 45,500</div>
                        <div class="text-sm text-gray-500">Tanpa diskon</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Debit</div>
                        <div class="text-sm text-gray-500">Approved</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        15:30
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Print">🖨️</button>
                            <button class="text-purple-600 hover:text-purple-900" title="Email">📧</button>
                        </div>
                    </td>
                </tr>

                <!-- Transaction 3 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">TRX-2025-0040</div>
                        <div class="text-sm text-yellow-600">⏳ Pending</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 text-xs font-semibold">AF</span>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm font-medium text-gray-900">Ahmad Fauzi</div>
                                <div class="text-sm text-blue-600">👑 Member</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">12 item</div>
                        <div class="text-sm text-gray-500">Belanja bulanan</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">Rp 285,000</div>
                        <div class="text-sm text-green-600">Diskon: Rp 15,000</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-yellow-600">Transfer</div>
                        <div class="text-sm text-gray-500">Menunggu konfirmasi</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        15:15
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Konfirmasi">✅</button>
                            <button class="text-red-600 hover:text-red-900" title="Batal">❌</button>
                        </div>
                    </td>
                </tr>

                <!-- Transaction 4 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">TRX-2025-0039</div>
                        <div class="text-sm text-green-600">✅ Selesai</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                <span class="text-gray-600 text-xs font-semibold">DP</span>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm font-medium text-gray-900">Dewi Permata</div>
                                <div class="text-sm text-gray-600">👤 Biasa</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">2 item</div>
                        <div class="text-sm text-gray-500">Shampo, Sabun</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">Rp 32,000</div>
                        <div class="text-sm text-gray-500">Tanpa diskon</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Cash</div>
                        <div class="text-sm text-gray-500">Pas</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        15:00
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-900" title="Detail">👁️</button>
                            <button class="text-green-600 hover:text-green-900" title="Print">🖨️</button>
                            <button class="text-purple-600 hover:text-purple-900" title="Email">📧</button>
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
                Menampilkan 1 hingga 10 dari 42 transaksi hari ini
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50">Previous</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded">1</button>
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50">2</button>
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>

<!-- Daily Summary -->
<div class="bg-white rounded-lg shadow-md p-6 mt-6">
    <h3 class="text-lg font-semibold text-gray-900 mb-4">📊 Ringkasan Hari Ini</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="text-center">
            <div class="text-2xl font-bold text-blue-600 mb-2">42</div>
            <div class="text-gray-600">Total Transaksi</div>
            <div class="text-sm text-gray-500 mt-1">↑ 15% dari kemarin</div>
        </div>
        <div class="text-center">
            <div class="text-2xl font-bold text-green-600 mb-2">Rp 2,485,500</div>
            <div class="text-gray-600">Total Penjualan</div>
            <div class="text-sm text-gray-500 mt-1">↑ 22% dari kemarin</div>
        </div>
        <div class="text-center">
            <div class="text-2xl font-bold text-purple-600 mb-2">Rp 312,750</div>
            <div class="text-gray-600">Total Diskon Member</div>
            <div class="text-sm text-gray-500 mt-1">18 transaksi member</div>
        </div>
    </div>
</div>
@endsection
