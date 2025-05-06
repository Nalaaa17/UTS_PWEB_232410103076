<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pertanianku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 text-gray-800 font-sans min-h-screen">
    <x-navbar />

    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
