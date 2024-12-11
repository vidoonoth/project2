
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Perpustakaan Indramayu') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        .gradient-bg {
            background: linear-gradient(to right, rgba(15, 23, 42, 1) 49%, rgba(162, 113, 240, 0) 100%);
        }

        * {
            font-family: 'Poppins';
        }

        input[type="search"]::-webkit-search-results-button {
            -webkit-appearance: none;
            appearance: none;
        }

        input[type="search"]::-webkit-search-decoration {
            display: none;
        }

        input[type="search"]::-webkit-search-results-decoration {
            display: none;
        }

        input[type="search"]::-webkit-search-cancel-button {
            display: none;
        }
        details::-webkit-details-marker {
            display: none; /* Menghilangkan ikon default pada Webkit (Chrome, Safari) */
        }
        .scrollbar::-webkit-scrollbar {
            width: 8px;
        }
        .scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .scrollbar::-webkit-scrollbar-thumb {
            background-color: #60a5fa;
            border-radius: 10px;
            border: 2px solid #f1f1f1;
        }
        .scrollbar::-webkit-scrollbar-thumb:hover {
            background: #4594f4;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased  bg-gray-100 dark:bg-gray-900">
    <div class="w-full">
        <div class=""></div>
        {{-- <!-- Page Heading -->
            @isset($header)
                <header class="bg-blue-400 dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset --}}

        <!-- Page Content -->
        <main class="">
            <h1>Notifikasi</h1>

        @if($notifikasi->isEmpty())
            <p>Anda tidak memiliki notifikasi.</p>
        @else
            <ul>
                @foreach($notifikasi as $notif)
                    <li>
                        {{ $notif->message['message'] }}
                        <br>
                        {{-- <small>{{ $notification->created_at->diffForHumans() }}</small> --}}
                    </li>
                @endforeach
            </ul>
        @endif

        </main>
        @include('layouts.footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>







</body>

</html>
