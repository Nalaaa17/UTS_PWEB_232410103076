@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-green-900/70"
     style="background-image: url('https://images.unsplash.com/photo-1560493676-04071c5f467b?auto=format&fit=crop&w=1740&q=80'); background-size: cover; background-position: center;">
    <div class="bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-xl max-w-md w-full">
        <div class="flex flex-col items-center">
            <img src="https://i.pravatar.cc/120?u=petanidesa" alt="Foto Profil"
                 class="w-32 h-32 rounded-full shadow-md mb-4 border-4 border-green-200 object-cover">
            <h2 class="text-2xl font-bold text-green-700 mb-1">
                {{ $username ?? 'Pengguna' }}
            </h2>
            <p class="text-sm text-gray-600 mb-4 italic">Petani Digital | Penggiat Pertanian Modern</p>
        </div>

        <div class="text-left mt-4 border-t pt-4">
            <h3 class="text-lg font-semibold text-green-700 mb-2">Biodata</h3>
            <ul class="text-gray-700 space-y-2 text-sm">
                <li><strong>Nama:</strong> {{ $username ?? 'Tidak diketahui' }}</li>
                <li><strong>Alamat:</strong> Desa Mekar Sari, Kec. Tani Jaya</li>
                <li><strong>Umur:</strong> 35 tahun</li>
                <li><strong>Spesialisasi:</strong> Padi dan Jagung</li>
                <li><strong>Pengalaman:</strong> 10 tahun di bidang pertanian</li>
            </ul>
        </div>
    </div>
</div>

@endsection
