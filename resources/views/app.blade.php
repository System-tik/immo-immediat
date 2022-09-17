<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>immo-immediat</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <link rel="stylesheet" href="{{asset('css/moi.css')}}">
        @livewireStyles()
        
    </head>
    <body class="">
        @yield('content')
        @livewireScripts()
    </body>
</html>
