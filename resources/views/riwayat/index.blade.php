@extends('layouts.app')

@section('title', 'Riwayat Transaksi - Ahlinya Retail Store')

@section('content')
<!-- Header Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Riwayat Transaksi & Laporan</h1>
            <p class="text-gray-600 mt-2">Analisis penjualan dan riwayat transaksi lengkap</p>
        </div>
        <div class="flex space-x-2">
            <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition duration-300">
                📊 Export Excel
            </button>
            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition duration-300">
                📄 Export PDF
            </button>
        </div>
    </div>
</div>

<!-- Filter Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <h3 class="text-lg font-semibold text-gray-900 mb-4">🔍 Filter Laporan</h3>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Periode</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="today">Hari Ini</option>
                <option value="yesterday">Kemarin</option>
                <option value="this_week">Minggu Ini</option>
                <option value="last_week">Minggu Lalu</option>
                <option value="this_month">Bulan Ini</option>
                <option value="last_month">Bulan Lalu</option>
                <option value="custom">Custom Range</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Dari Tanggal</label>
            <input type="date" value="{{ date('Y-m-d') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Sampai Tanggal</label>
            <input type="date" value="{{ date('Y-m-d') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex items-end">
            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-300">
                📈 Tampilkan
            </button>
        </div>
    </div>
</div>

<!-- Summary Statistics -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="ml-4">
                <p class="text-2xl font-semibold text-gray-900">42</p>
                <p class="text-gray-500 text-sm">Total Transaksi</p>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="ml-4">
                <p class="text-2xl font-semibold text-gray-900">2.5M</p>
                <p class="text-gray-500 text-sm">Total Penjualan</p>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="ml-4">
                <p class="text-2xl font-semibold text-gray-900">284</p>
                <p class="text-gray-500 text-sm">Item Terjual</p>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center">
            <div class="ml-4">
                <p class="text-2xl font-semibold text-gray-900">59K</p>
                <p class="text-gray-500 text-sm">Rata-rata/Transaksi</p>
            </div>
        </div>
    </div>
</div>

<!-- Charts and Analysis -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
    <!-- Top Selling Products -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">🏆 Barang Terlaris</h3>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg">
                <div class="flex items-center">
                    <span class="text-2xl mr-3">🥇</span>
                    <div>
                        <div class="font-medium">Indomie Ayam Bawang</div>
                        <div class="text-sm text-gray-500">BR-001</div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="font-semibold text-yellow-600">87 pcs</div>
                    <div class="text-sm text-gray-500">Rp 261,000</div>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center">
                    <span class="text-2xl mr-3">🥈</span>
                    <div>
                        <div class="font-medium">Teh Botol Sosro</div>
                        <div class="text-sm text-gray-500">BR-045</div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="font-semibold text-gray-600">64 pcs</div>
                    <div class="text-sm text-gray-500">Rp 288,000</div>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg">
                <div class="flex items-center">
                    <span class="text-2xl mr-3">🥉</span>
                    <div>
                        <div class="font-medium">Susu Ultra Milk</div>
                        <div class="text-sm text-gray-500">BR-023</div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="font-semibold text-orange-600">42 pcs</div>
                    <div class="text-sm text-gray-500">Rp 231,000</div>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center">
                    <span class="text-xl mr-3">4️⃣</span>
                    <div>
                        <div class="font-medium">Chitato Sapi Panggang</div>
                        <div class="text-sm text-gray-500">BR-112</div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="font-semibold text-gray-600">31 pcs</div>
                    <div class="text-sm text-gray-500">Rp 372,000</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slow Moving Products -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">🐌 Barang Kurang Laku</h3>
            <div class="space-y-4">
            <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg">
                <div class="flex items-center">
                    <span class="text-2xl mr-3">🥇</span>
                    <div>
                        <div class="font-medium">Indomie Ayam Bawang</div>
                        <div class="text-sm text-gray-500">BR-001</div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="font-semibold text-yellow-600">87 pcs</div>
                    <div class="text-sm text-gray-500">Rp 261,000</div>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center">
                    <span class="text-2xl mr-3">🥈</span>
                    <div>
                        <div class="font-medium">Teh Botol Sosro</div>
                        <div class="text-sm text-gray-500">BR-045</div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="font-semibold text-gray-600">64 pcs</div>
                    <div class="text-sm text-gray-500">Rp 288,000</div>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg">
                <div class="flex items-center">
                    <span class="text-2xl mr-3">🥉</span>
                    <div>
                        <div class="font-medium">Susu Ultra Milk</div>
                        <div class="text-sm text-gray-500">BR-023</div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="font-semibold text-orange-600">42 pcs</div>
                    <div class="text-sm text-gray-500">Rp 231,000</div>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center">
                    <span class="text-xl mr-3">4️⃣</span>
                    <div>
                        <div class="font-medium">Chitato Sapi Panggang</div>
                        <div class="text-sm text-gray-500">BR-112</div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="font-semibold text-gray-600">31 pcs</div>
                    <div class="text-sm text-gray-500">Rp 372,000</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Low Stock Alert -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <h3 class="text-lg font-semibold text-gray-900 mb-4">⚠️ Peringatan Stok Menipis</h3>
    <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg">
                <div class="flex items-center">
                    <div class="w-16 h-16 bg-gray-200 rounded-lg overflow-hidden">
                            <img src="{{ getProductImage(productName: 'Indomie Ayam Goreng') }}" alt="{{ getProductImageAlt(productName: 'Indomie Ayam Goreng') }}" class="w-full h-full object-cover">
                        </div>
                    <div>
                        <div class="font-medium">Indomie kari ayam</div>
                        <div class="text-sm text-gray-500">BR-023</div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="font-semibold text-orange-600">TERSISA 1 
                    </div>
                </div>
            </div>
</div>

<!-- Transaction History Table -->
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
@endsection
