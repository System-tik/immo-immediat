<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>immo-immediat</title>
        @vite('resources/css/app.css')
        <script src="{{asset('build/assets/app.ab93cf8a.js')}}"></script>
        @livewireStyles()
        
    </head>
    <body class="">
        @yield('content')
        @livewireScripts()
    </body>
</html>
