@extends('layouts.app')

@section('content')
<style>


    .bg-overlay {
        background-color: rgba(255, 255, 255, 0.85);
    }
</style>

<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-overlay p-8 rounded-lg shadow-lg">
        <div class="text-center">
            <img src="images\logo-pertanianku.png" alt="Logo Pertanian" class="mx-auto w-20 mb-4 rounded-full border border-green-300 shadow-sm""> <!-- Optional logo -->
            <h2 class="text-3xl font-extrabold text-green-800">
                Selamat Datang di <span class="text-green-600">Pertanianku</span>
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Sistem Informasi Digital untuk Petani Cerdas
            </p>
        </div>
        <form class="mt-6 space-y-4" action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <label for="username" class="sr-only">Username</label>
                <input id="username" name="username" type="text" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-500 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    placeholder="Masukkan Username">
            </div>
            <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-500 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    placeholder="Masukkan Password">
            </div>

            <div>
            <button type="submit"
            class="w-full py-2 px-4 text-sm font-semibold rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition">
            Masuk
            </button>
            </div>
        </form>
    </div>
</div>
@endsection
