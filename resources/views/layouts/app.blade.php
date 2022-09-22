<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{asset('css/customcss.css')}}">
        <link rel="stylesheet" href="{{asset('css/toggle.css')}}">
        @livewireStyles

        <!-- Scripts -->
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
        {{-- @vite('resources/css/app.css')
        @vite('resources/js/app.js') --}}
        <link rel="stylesheet" href="{{ asset('build/assets/app.df0ffaee.css') }}">
        <script src="{{asset('build/assets/app.ab93cf8a.js')}}"></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-blue-900">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        {{-- <script>
            var notif = document.querySelector('#notif');
            window.addEventListener('Updated', event => {
                notif.style.transform = "scale(0.2)";
                setTimeout(() => {
                    notif.style.transform = "scale(0.6)";
                    setTimeout(() => {
                        notif.style.transform = "scale(1)";
                    }, 100);
                }, 100);
                setTimeout(() => {
                    notif.style.transform = "scale(0)";
                }, 3000);
            });
                
        </script> --}}
        

        @stack('modals')

        @livewireScripts
        
    </body>
</html>
