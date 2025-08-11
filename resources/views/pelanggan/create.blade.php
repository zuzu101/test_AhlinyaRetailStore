@extends('layouts.app')

@section('title', 'Daftar Pelanggan - Ahlinya Retail Store')

@section('content')
<!-- Header Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Daftar Pelanggan Baru</h1>
            <p class="text-gray-600 mt-2">Lengkapi informasi pelanggan untuk registrasi</p>
        </div>
        <a href="{{ route('pelanggan.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition duration-300">
            <span class="mr-2">←</span>Kembali
        </a>
    </div>
</div>

<!-- Form Section -->
<div class="bg-white rounded-lg shadow-md p-6">
    <form class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Column - Personal Info -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Informasi Pribadi -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Pribadi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap *</label>
                            <input type="text" placeholder="Contoh: Budi Santoso" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon *</label>
                            <input type="tel" placeholder="Contoh: 0812-3456-7890" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Alamat Lengkap -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Alamat Lengkap</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Jalan *</label>
                            <textarea rows="2" placeholder="Contoh: Jl. Kebon Jeruk No. 123" 
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">RT *</label>
                                <input type="text" placeholder="Contoh: 05" 
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">RW *</label>
                                <input type="text" placeholder="Contoh: 02" 
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Provinsi *</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Pilih Provinsi</option>
                                    <option value="dki-jakarta">DKI Jakarta</option>
                                    <option value="jawa-barat">Jawa Barat</option>
                                    <option value="jawa-tengah">Jawa Tengah</option>
                                    <option value="jawa-timur">Jawa Timur</option>
                                    <option value="banten">Banten</option>
                                    <option value="yogyakarta">DI Yogyakarta</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Kota/Kabupaten *</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="">Pilih Kota</option>
                                    <option value="jakarta-barat">Jakarta Barat</option>
                                    <option value="jakarta-pusat">Jakarta Pusat</option>
                                    <option value="jakarta-timur">Jakarta Timur</option>
                                    <option value="jakarta-selatan">Jakarta Selatan</option>
                                    <option value="jakarta-utara">Jakarta Utara</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informasi Tambahan -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Tambahan</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email (Opsional)</label>
                            <input type="email" placeholder="Contoh: budi.santoso@email.com" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir (Opsional)</label>
                            <input type="date" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Membership -->
            <div class="lg:col-span-1">
                <div class="sticky top-6 space-y-6">
                    <!-- Pilihan Keanggotaan -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Jenis Keanggotaan</h3>
                        <div class="space-y-3">
                            <label class="flex items-start p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                                <input type="radio" name="membership" value="biasa" class="mt-1 mr-3" checked>
                                <div>
                                    <div class="font-medium text-gray-900">👤 Pelanggan Biasa</div>
                                    <div class="text-sm text-gray-500 mt-1">
                                        • Gratis registrasi<br>
                                        • Tanpa iuran bulanan<br>
                                        • Harga normal
                                    </div>
                                </div>
                            </label>
                            
                            <label class="flex items-start p-4 border border-blue-300 rounded-lg cursor-pointer hover:bg-blue-50">
                                <input type="radio" name="membership" value="member" class="mt-1 mr-3">
                                <div>
                                    <div class="font-medium text-blue-900">👑 Member</div>
                                    <div class="text-sm text-blue-600 mt-1">
                                        • Diskon 5% setiap transaksi<br>
                                        • Iuran Rp 50,000/bulan<br>
                                        • Prioritas layanan
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Member Payment Section (Hidden by default) -->
                    <div id="memberPayment" class="hidden">
                        <div class="bg-blue-50 rounded-lg p-4">
                            <h4 class="font-medium text-blue-900 mb-3">💳 Pembayaran Iuran Pertama</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-blue-700">Iuran Member (1 bulan)</span>
                                    <span class="font-semibold text-blue-900">Rp 50,000</span>
                                </div>
                                <div class="border-t pt-2">
                                    <div class="flex justify-between font-semibold">
                                        <span class="text-blue-900">Total</span>
                                        <span class="text-blue-900">Rp 50,000</span>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label class="block text-sm font-medium text-blue-700 mb-2">Metode Pembayaran</label>
                                    <select class="w-full px-3 py-2 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option value="cash">Cash</option>
                                        <option value="transfer">Transfer Bank</option>
                                        <option value="debit">Kartu Debit</option>
                                    </select>
                                </div>
                            </div>
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
                    <span class="mr-2">👤</span>Daftar Pelanggan
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    // Toggle member payment section
    document.querySelectorAll('input[name="membership"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const memberPayment = document.getElementById('memberPayment');
            if (this.value === 'member') {
                memberPayment.classList.remove('hidden');
            } else {
                memberPayment.classList.add('hidden');
            }
        });
    });
</script>
@endsection
