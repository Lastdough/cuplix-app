<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased gradient h-screen font-dmsans">
    <livewire:welcome-dropdown>

        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mt-32">
            <div class="kiri">
                <div class="teks">
                    <h1 class="font-bold text-txt text-txtC">
                        Tempat cari rekomendasi tontonan
                    </h1>
                    <p class="font-normal text-lg text-gray-700">
                        Bingung pengen nonton apaan, terus ngga tau nonton dimana, yuk cari rekomendasinya disini
                    </p>
                </div>
                <div class="tombol">
                    <a href="{{route('register')}}">
                        <button type="button" class="mt-4 font-normal text-db3 bg-bluePri hover:bg-blueSec rounded-2xl text-xl px-9 py-4 text-center mr-2 mb-2">
                            Mulai Searching
                        </button>
                    </a>
                </div>
            </div>
            <div class="gambar">

            </div>
        </div>
</body>

</html>