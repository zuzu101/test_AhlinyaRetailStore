@extends('layouts.app')

@section('title', 'Transaksi Baru - Ahlinya Retail Store')

@section('content')
<!-- Header Section -->
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Kasir - Transaksi Baru</h1>
            <p class="text-gray-600 mt-2">Sistem Point of Sale untuk transaksi penjualan</p>
        </div>
        <div class="text-right">
            <div class="text-sm text-gray-500">{{ date('d F Y') }}</div>
            <div class="text-lg font-semibold text-gray-900">{{ date('H:i') }} WIB</div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Left Column - Product Selection -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Customer Selection -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">👤 Pilih Pelanggan</h3>
            <div class="flex gap-4">
                <div class="flex-1">
                    <input type="text" id="customerSearch" placeholder="Cari nama pelanggan atau nomor telepon..." 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="button" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">
                    ➕ Daftar Baru
                </button>
            </div>
            
            <!-- Selected Customer Display -->
            <div id="selectedCustomer" class="mt-4 p-4 bg-blue-50 rounded-lg hidden">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-semibold">BS</span>
                        </div>
                        <div class="ml-3">
                            <div class="font-medium text-gray-900">Budi Santoso</div>
                            <div class="text-sm text-blue-600">👑 Member - Diskon 5%</div>
                        </div>
                    </div>
                    <button class="text-red-600 hover:text-red-800">❌</button>
                </div>
            </div>
        </div>

        <!-- Product Search & Add -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">🛍️ Tambah Barang</h3>
            <div class="flex gap-4 mb-4">
                <div class="flex-1">
                    <input type="text" id="productSearch" placeholder="Cari nama barang atau kode barang (BR-001)..." 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                    🔍 Cari
                </button>
            </div>

            <!-- Product Search Results -->
            <div id="productResults" class="space-y-2 max-h-60 overflow-y-auto">
                <!-- Sample Product Results -->
                <div class="flex items-center justify-between p-3 border rounded-lg hover:bg-gray-50 cursor-pointer" onclick="addProduct('BR-001')">
                    <div class="flex items-center">
                        <span class="text-2xl mr-3">🍜</span>
                        <div>
                            <div class="font-medium">Indomie Ayam Goreng</div>
                            <div class="text-sm text-gray-500">BR-001 • Stok: 45 pcs</div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="font-semibold">Rp 3,000</div>
                        <div class="text-sm text-gray-500">Rak A1</div>
                    </div>
                </div>

                <div class="flex items-center justify-between p-3 border rounded-lg hover:bg-gray-50 cursor-pointer" onclick="addProduct('BR-045')">
                    <div class="flex items-center">
                        <span class="text-2xl mr-3">🍵</span>
                        <div>
                            <div class="font-medium">Teh Botol Sosro</div>
                            <div class="text-sm text-gray-500">BR-045 • Stok: 32 pcs</div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="font-semibold">Rp 4,500</div>
                        <div class="text-sm text-gray-500">Rak B2</div>
                    </div>
                </div>

                <div class="flex items-center justify-between p-3 border rounded-lg hover:bg-gray-50 cursor-pointer" onclick="addProduct('BR-023')">
                    <div class="flex items-center">
                        <span class="text-2xl mr-3">🥛</span>
                        <div>
                            <div class="font-medium">Susu Ultra Milk 250ml</div>
                            <div class="text-sm text-gray-500">BR-023 • Stok: 28 pcs</div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="font-semibold">Rp 5,500</div>
                        <div class="text-sm text-gray-500">Rak C1</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shopping Cart -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">🛒 Keranjang Belanja</h3>
            <div id="cartItems" class="space-y-3">
                <!-- Cart will be populated by JavaScript -->
                <div class="text-center text-gray-500 py-8">
                    Keranjang masih kosong. Tambahkan barang untuk memulai transaksi.
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column - Transaction Summary -->
    <div class="lg:col-span-1">
        <div class="sticky top-6 space-y-6">
            <!-- Transaction Summary -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">💰 Ringkasan Transaksi</h3>
                
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Subtotal</span>
                        <span id="subtotal">Rp 0</span>
                    </div>
                    <div class="flex justify-between text-green-600">
                        <span>Diskon Member (5%)</span>
                        <span id="discount">-Rp 0</span>
                    </div>
                    <div class="border-t pt-3">
                        <div class="flex justify-between text-lg font-semibold">
                            <span>Total</span>
                            <span id="total" class="text-blue-600">Rp 0</span>
                        </div>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="mt-6">
                    <h4 class="font-medium text-gray-900 mb-3">Metode Pembayaran</h4>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="radio" name="payment" value="cash" class="mr-2" checked>
                            <span>💵 Cash</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="payment" value="debit" class="mr-2">
                            <span>💳 Kartu Debit</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="payment" value="transfer" class="mr-2">
                            <span>🏦 Transfer Bank</span>
                        </label>
                    </div>
                </div>

                <!-- Cash Payment Details -->
                <div id="cashPayment" class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Jumlah Bayar</label>
                    <input type="number" id="cashAmount" placeholder="0" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                           onkeyup="calculateChange()">
                    <div class="mt-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Kembalian:</span>
                            <span id="change" class="font-medium">Rp 0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-3">
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-medium transition duration-300">
                    💾 Simpan & Cetak
                </button>
                <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg transition duration-300">
                    📧 Kirim Email
                </button>
                <button class="w-full bg-gray-300 hover:bg-gray-400 text-gray-700 py-2 rounded-lg transition duration-300">
                    🗑️ Reset Transaksi
                </button>
            </div>

            <!-- Quick Info -->
            <div class="bg-yellow-50 rounded-lg p-4">
                <h4 class="font-medium text-yellow-900 mb-2">💡 Tips</h4>
                <ul class="text-sm text-yellow-700 space-y-1">
                    <li>• Scan/ketik kode barang untuk cepat</li>
                    <li>• Member otomatis dapat diskon 5%</li>
                    <li>• Tekan F2 untuk pelanggan baru</li>
                    <li>• Tekan F12 untuk print ulang</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let cart = [];
let customer = null;

function addProduct(productCode) {
    // Sample product data - in real app, this would come from database
    const products = {
        'BR-001': { name: 'Indomie Ayam Goreng', price: 3000, stock: 45, icon: '🍜' },
        'BR-045': { name: 'Teh Botol Sosro', price: 4500, stock: 32, icon: '🍵' },
        'BR-023': { name: 'Susu Ultra Milk 250ml', price: 5500, stock: 28, icon: '🥛' }
    };

    const product = products[productCode];
    if (!product) return;

    // Check if product already in cart
    const existingItem = cart.find(item => item.code === productCode);
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            code: productCode,
            name: product.name,
            price: product.price,
            quantity: 1,
            icon: product.icon,
            stock: product.stock
        });
    }

    updateCart();
}

function removeFromCart(productCode) {
    cart = cart.filter(item => item.code !== productCode);
    updateCart();
}

function updateQuantity(productCode, quantity) {
    const item = cart.find(item => item.code === productCode);
    if (item) {
        item.quantity = Math.max(1, Math.min(quantity, item.stock));
        updateCart();
    }
}

function updateCart() {
    const cartContainer = document.getElementById('cartItems');
    
    if (cart.length === 0) {
        cartContainer.innerHTML = `
            <div class="text-center text-gray-500 py-8">
                Keranjang masih kosong. Tambahkan barang untuk memulai transaksi.
            </div>
        `;
    } else {
        cartContainer.innerHTML = cart.map(item => `
            <div class="flex items-center justify-between p-3 border rounded-lg">
                <div class="flex items-center flex-1">
                    <span class="text-xl mr-3">${item.icon}</span>
                    <div class="flex-1">
                        <div class="font-medium text-sm">${item.name}</div>
                        <div class="text-xs text-gray-500">${item.code} • Stok: ${item.stock}</div>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="updateQuantity('${item.code}', ${item.quantity - 1})" 
                            class="w-6 h-6 bg-gray-200 rounded text-xs hover:bg-gray-300">-</button>
                    <input type="number" value="${item.quantity}" min="1" max="${item.stock}"
                           onchange="updateQuantity('${item.code}', this.value)"
                           class="w-12 text-center text-xs border rounded">
                    <button onclick="updateQuantity('${item.code}', ${item.quantity + 1})" 
                            class="w-6 h-6 bg-gray-200 rounded text-xs hover:bg-gray-300">+</button>
                    <div class="text-sm font-medium w-16 text-right">Rp ${(item.price * item.quantity).toLocaleString()}</div>
                    <button onclick="removeFromCart('${item.code}')" 
                            class="text-red-600 hover:text-red-800 text-xs">🗑️</button>
                </div>
            </div>
        `).join('');
    }

    updateSummary();
}

function updateSummary() {
    const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    const discount = customer && customer.isMember ? subtotal * 0.05 : 0;
    const total = subtotal - discount;

    document.getElementById('subtotal').textContent = `Rp ${subtotal.toLocaleString()}`;
    document.getElementById('discount').textContent = `-Rp ${discount.toLocaleString()}`;
    document.getElementById('total').textContent = `Rp ${total.toLocaleString()}`;

    calculateChange();
}

function calculateChange() {
    const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    const discount = customer && customer.isMember ? total * 0.05 : 0;
    const finalTotal = total - discount;
    
    const cashAmount = parseFloat(document.getElementById('cashAmount').value) || 0;
    const change = Math.max(0, cashAmount - finalTotal);
    
    document.getElementById('change').textContent = `Rp ${change.toLocaleString()}`;
}

// Demo: Auto-select customer for testing
setTimeout(() => {
    customer = { name: 'Budi Santoso', isMember: true };
    document.getElementById('selectedCustomer').classList.remove('hidden');
    updateSummary();
}, 1000);
</script>
@endsection
