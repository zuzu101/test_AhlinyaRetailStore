@extends('layouts.app')

@section('title', 'Tambah Barang - Ahlinya Retail Store')

@section('content')
<!-- Header Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Tambah Barang Baru</h1>
            <p class="text-gray-600 mt-2">Lengkapi informasi barang yang akan ditambahkan ke sistem</p>
        </div>
        <a href="{{ route('barang.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition duration-300">
            <span class="mr-2">←</span>Kembali
        </a>
    </div>
</div>

<!-- Form Section -->
<div class="bg-white rounded-lg shadow-md p-6">
    <form class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Column - Basic Info -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Informasi Dasar -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Dasar</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kode Barang *</label>
                            <input type="text" placeholder="Contoh: BR-001" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Barang *</label>
                            <input type="text" placeholder="Contoh: Indomie Ayam Bawang" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Lokasi dan Kategori -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Lokasi & Kategori</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tempat Rak *</label>
                            <input type="text" placeholder="Contoh: Rak A1" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Pilih Kategori</option>
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                                <option value="snack">Snack</option>
                                <option value="kebersihan">Kebersihan</option>
                                <option value="perawatan">Perawatan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Harga -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Harga</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Harga Beli *</label>
                            <div class="relative">
                                <span class="absolute left-3 top-2 text-gray-500">Rp</span>
                                <input type="number" placeholder="0" 
                                       class="w-full pl-12 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Harga Jual *</label>
                            <div class="relative">
                                <span class="absolute left-3 top-2 text-gray-500">Rp</span>
                                <input type="number" placeholder="0" 
                                       class="w-full pl-12 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Profit</label>
                            <div class="px-4 py-2 bg-gray-100 rounded-lg text-gray-600">
                                Rp 0 (0%)
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stok -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Stok</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jumlah Barang *</label>
                            <input type="number" placeholder="0" min="0"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Satuan</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="pcs">Pcs</option>
                                <option value="box">Box</option>
                                <option value="kg">Kg</option>
                                <option value="liter">Liter</option>
                                <option value="pack">Pack</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Stok Minimum</label>
                            <input type="number" placeholder="10" min="0"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Deskripsi Barang</h3>
                    <textarea rows="4" placeholder="Masukkan deskripsi lengkap barang..." 
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
            </div>

            <!-- Right Column - Photo Upload -->
            <div class="lg:col-span-1">
                <div class="sticky top-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Foto Barang</h3>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                        <div class="space-y-4">
                            <div class="w-24 h-24 bg-gray-100 rounded-lg mx-auto flex items-center justify-center">
                                <span class="text-4xl text-gray-400">📷</span>
                            </div>
                            <div>
                                <label class="cursor-pointer">
                                    <span class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-300">
                                        Upload Foto
                                    </span>
                                    <input type="file" class="hidden" accept="image/*">
                                </label>
                                <p class="text-sm text-gray-500 mt-2">
                                    PNG, JPG hingga 2MB
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Preview Actions -->
                    <div class="mt-6 space-y-3">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-medium text-blue-900 mb-2">💡 Tips Upload Foto</h4>
                            <ul class="text-sm text-blue-700 space-y-1">
                                <li>• Gunakan foto produk yang jelas</li>
                                <li>• Background putih atau bersih</li>
                                <li>• Ukuran minimal 300x300px</li>
                                <li>• Format JPG atau PNG</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="border-t pt-6">
            <div class="flex justify-end space-x-4">
                <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-6 py-2 rounded-lg transition duration-300">
                    Reset Form
                </button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition duration-300">
                    <span class="mr-2">💾</span>Simpan Barang
                </button>
            </div>
        </div>
    </form>
</div>

<!-- Quick Tips Section -->
<div class="bg-yellow-50 rounded-lg p-6 mt-6">
    <h3 class="text-lg font-semibold text-yellow-800 mb-3">🚀 Panduan Cepat</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-yellow-700">
        <div>
            <strong>Kode Barang:</strong> Gunakan format BR-XXX (contoh: BR-001, BR-045)
        </div>
        <div>
            <strong>Harga Jual:</strong> Pastikan lebih tinggi dari harga beli untuk keuntungan
        </div>
        <div>
            <strong>Tempat Rak:</strong> Sesuai dengan lokasi fisik di toko (contoh: Rak A1, Rak B2)
        </div>
        <div>
            <strong>Stok Minimum:</strong> Batas minimum stok untuk reminder pengisian ulang
        </div>
    </div>
</div>
@endsection
