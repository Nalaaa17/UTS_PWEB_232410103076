<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pertanianku</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">


    <header class="flex justify-between items-center px-6 py-4 bg-white shadow-md fixed top-0 w-full z-50">
        <div class="flex items-center space-x-3">
          <img src="/images/logo-pertanianku.png" alt="Logo Pertanian" class="w-10 h-10 rounded-full">
          <h1 class="text-xl font-bold text-green-700">Pertanianku</h1>
        </div>
        <nav class="space-x-4">
          <!-- Navigasi jika ada -->
        </nav>
    </header>



  Pertanian -->
    <div class="relative h-96 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
             alt="Ladang Pertanian"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center px-4">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Pertanianku</h1>
                <p class="text-xl text-white mb-8">Sistem Manajemen Inventaris Hasil Pertanian Modern</p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-6">
                    <a href="#features" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium">
                        Jelajahi Fitur
                    </a>
                    <a href="{{ route('login') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium">
                        Masuk
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div id="features" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Fitur Pertanianku</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Fitur 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="text-green-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Manajemen Inventaris</h3>
                    <p class="text-gray-600">Kelola stok hasil pertanian dengan sistem pencatatan digital yang akurat.</p>
                </div>


                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="text-green-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Laporan Otomatis</h3>
                    <p class="text-gray-600">Generate laporan stok, penjualan, dan distribusi secara otomatis.</p>
                </div>


                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="text-green-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Manajemen Petani</h3>
                    <p class="text-gray-600">Kelola data petani dan hasil produksi masing-masing petani.</p>
                </div>
            </div>
        </div>
    </div>
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Hasil Pertanian Kami</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div>
                <img src="https://pertanian.uma.ac.id/wp-content/uploads/2023/04/Padi.jpg"
                     alt="Padi"
                     class="w-full h-48 object-cover rounded-lg shadow hover:shadow-lg transition">
            </div>
            <div>
                <img src="https://images.pexels.com/photos/96715/pexels-photo-96715.jpeg?auto=compress&cs=tinysrgb&w=600"
                     alt="Jagung"
                     class="w-full h-48 object-cover rounded-lg shadow hover:shadow-lg transition">
            </div>
            <div>
                <img src="https://images.pexels.com/photos/19835549/pexels-photo-19835549/free-photo-of-pemandangan-lanskap-lansekap-bidang.jpeg?auto=compress&cs=tinysrgb&w=600"
                     alt="Tebu"
                     class="w-full h-48 object-cover rounded-lg shadow hover:shadow-lg transition">
            </div>
            <div>
                <img src="https://siopen.balangankab.go.id/storage/merchant/products/2024/04/23/6a5eee693d4687b2eb14dc9893915563.jpg"
                     alt="Cabai"
                     class="w-full h-48 object-cover rounded-lg shadow hover:shadow-lg transition">
            </div>
        </div>
    </div>
</div>
<footer class="bg-green-700 text-white py-6 mt-12">
    <div class="container mx-auto px-4 text-center">
      <p class="text-sm">&copy; 2025 <span class="font-semibold">Pertanianku</span>. All rights reserved.</p>
      <div class="mt-2 text-xs text-green-200">
        <p>Dibuat dengan ❤️ untuk pertanian Indonesia.</p>
      </div>
    </div>
  </footer>
