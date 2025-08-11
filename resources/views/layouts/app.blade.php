<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ahlinya Retail Store')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="{{ route('dashboard') }}" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-blue-600 text-xl">Ahlinya Retail Store</span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('dashboard') }}" 
                           class="py-4 px-2 text-gray-500 border-b-4 @if(request()->routeIs('dashboard')) border-blue-500 text-blue-500 @else border-transparent hover:text-blue-500 @endif transition duration-300">
                            Dashboard
                        </a>
                        <a href="{{ route('barang.index') }}" 
                           class="py-4 px-2 text-gray-500 border-b-4 @if(request()->routeIs('barang.*')) border-blue-500 text-blue-500 @else border-transparent hover:text-blue-500 @endif transition duration-300">
                            Data Barang
                        </a>
                        <a href="{{ route('pelanggan.index') }}" 
                           class="py-4 px-2 text-gray-500 border-b-4 @if(request()->routeIs('pelanggan.*')) border-blue-500 text-blue-500 @else border-transparent hover:text-blue-500 @endif transition duration-300">
                            Pelanggan
                        </a>
                        <a href="{{ route('transaksi.index') }}" 
                           class="py-4 px-2 text-gray-500 border-b-4 @if(request()->routeIs('transaksi.*')) border-blue-500 text-blue-500 @else border-transparent hover:text-blue-500 @endif transition duration-300">
                            Transaksi
                        </a>
                        <a href="{{ route('riwayat.index') }}" 
                           class="py-4 px-2 text-gray-500 border-b-4 @if(request()->routeIs('riwayat.*')) border-blue-500 text-blue-500 @else border-transparent hover:text-blue-500 @endif transition duration-300">
                            Riwayat
                        </a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-gray-500">Admin</span>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button" @click="mobileMenu = !mobileMenu">
                        <svg class="w-6 h-6 text-gray-500 hover:text-blue-500"
                            x-show="!mobileMenu"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu md:hidden" x-data="{mobileMenu: false}" x-show="mobileMenu">
            <a href="{{ route('dashboard') }}" class="block py-2 px-4 text-sm hover:bg-gray-100 @if(request()->routeIs('dashboard')) bg-blue-50 text-blue-600 @endif">Dashboard</a>
            <a href="{{ route('barang.index') }}" class="block py-2 px-4 text-sm hover:bg-gray-100 @if(request()->routeIs('barang.*')) bg-blue-50 text-blue-600 @endif">Data Barang</a>
            <a href="{{ route('pelanggan.index') }}" class="block py-2 px-4 text-sm hover:bg-gray-100 @if(request()->routeIs('pelanggan.*')) bg-blue-50 text-blue-600 @endif">Pelanggan</a>
            <a href="{{ route('transaksi.index') }}" class="block py-2 px-4 text-sm hover:bg-gray-100 @if(request()->routeIs('transaksi.*')) bg-blue-50 text-blue-600 @endif">Transaksi</a>
            <a href="{{ route('riwayat.index') }}" class="block py-2 px-4 text-sm hover:bg-gray-100 @if(request()->routeIs('riwayat.*')) bg-blue-50 text-blue-600 @endif">Riwayat</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
</body>
</html>
