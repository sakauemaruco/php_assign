<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/css/style.css','resources/css/slide.css', 'resources/js/app.js', 'resources/js/bgm.js', 'resources/js/slide.js'])
        @include('partials.fonts')
    </head>
    <body class="font-sans antialiased">
        {{-- <div class="min-h-screen bg-gray-100"> --}}
            <div class="min-h-screen mx-auto w-9/12 bg-[url('/public/img/cow.jpg')] bg-center bg-fixed bg-cover shadow">
            <div id="mouse-stalker" style="position: absolute; width: 50px; height: 50px; pointer-events: none; transform: translate(-50%, -50%); transition: transform 0.1s ease-out;">
                <!-- SVGアイコンをここに埋め込む -->
                <object type="image/svg+xml" data="/public/img/log.svg" width="32" height="32"></object>
            </div>
            <div class="fixed top-0 left-0 right-0 bg-white shadow-lg z-50 opacity-50">
                @include('layouts.navigation')
            </div>

            <!-- Page Heading -->
            @isset($header)
                <header class="mx-6 shadow rounded-md h-12 backdrop-blur-lg fixed top-20 left-1">
                    <div class="max-w-7xl mx-auto mt-4 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <audio id="hover-sound" src="../bgm/hover-sound.mp3" preload="auto"></audio>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    </body>
</html>
