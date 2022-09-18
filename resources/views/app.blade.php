<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>immo-immediat</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <link rel="stylesheet" href="{{asset('css/moi.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        @livewireStyles()
        
    </head>
    <body class="">
        @yield('content')
        @livewireScripts()
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script>
         $(document).ready(function(){
           // Add smooth scrolling to all links
           $("a").on('click', function(event) {
         
             // Make sure this.hash has a value before overriding default behavior
             if (this.hash !== "") {
               // Prevent default anchor click behavior
               event.preventDefault();
         
               // Store hash
               var hash = this.hash;
         
               // Using jQuery's animate() method to add smooth page scroll
               // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
               $('html, body').animate({
                 scrollTop: $(hash).offset().top
               }, 800, function(){
         
                 // Add hash (#) to URL when done scrolling (default click behavior)
                 window.location.hash = hash;
               });
             } // End if
           });
         });
         </script>
    </body>
</html>

