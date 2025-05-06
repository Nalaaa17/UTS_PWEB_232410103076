@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-cover bg-center relative"
     style="background-image: url('https://images.unsplash.com/photo-1560493676-04071c5f467b?auto=format&fit=crop&w=1740&q=80');">


    <div class="absolute inset-0 bg-green-900 bg-opacity-60"></div>


    <div class="relative z-10 flex items-center justify-center h-screen px-4">
        <div class="bg-white/90 p-10 rounded-2xl shadow-2xl max-w-xl w-full text-center">
            <img src="https://i.pravatar.cc/120?u=petanidesa" alt="Foto Petani"
                 class="mx-auto mb-4 rounded-full shadow-lg border-4 border-green-300 w-28 h-28 object-cover">
            <h1 class="text-4xl font-bold text-green-800 mb-2">Halo, {{ $username ?? 'Petani Hebat' }}! </h1>
            <p class="text-gray-700 mb-6">Selamat datang di <span class="font-semibold text-green-700">Pertanianku</span>, pusat informasi dan pengelolaan hasil tani Anda.</p>

            <div class="flex justify-center space-x-4">
                <a href="{{ route('profile') }}"
                   class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-full transition duration-200">
                    Lihat Profil
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
