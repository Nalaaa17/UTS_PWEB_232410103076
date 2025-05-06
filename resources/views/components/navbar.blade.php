<nav class="bg-green-700 text-white p-4 flex justify-between items-center">
    <div class="flex items-center space-x-3">
        <img src="/images/logo-pertanianku.png" alt="Logo" class="w-8 h-8 rounded-full">
        <h1 class="text-xl font-bold">Pertanianku</h1>
    </div>
    <div class="space-x-4">
        <a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a>
        <a href="{{ route('pengelolaan') }}" class="hover:underline">Pengelolaan</a>
        <a href="{{ route('profile') }}" class="hover:underline">Profile</a>
        <a href="/" class="hover:underline">Logout</a>
    </div>
</nav>
