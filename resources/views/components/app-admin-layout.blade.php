<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Perpustakaan Indramayu') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
</head>
<body class="font-sans antialiased dark:bg-gray-900 h-full">
    <div class="w-full h-full flex flex-col">
        <!-- Navigation Admin -->
        <x-navigasiAdmin></x-navigasiAdmin>

        <!-- Page Content -->
        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
