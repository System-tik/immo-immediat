<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>immo-immediat</title>
        {{-- @vite('resources/css/app.css')
        @vite('resources/js/app.js') --}}
        <link rel="stylesheet" href="{{asset('css/moi.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('build/assets/app.df0ffaee.css') }}">
        
        <link href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css " rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script src="{{asset('build/assets/app.ab93cf8a.js')}}"></script>
        <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


        <style>
          .splide__slide img {
              width: 100%;
              height: 100%;
              object-fit: cover;
          }
  
          .splide__slide {
              opacity: 0.6;
          }
  
          .splide__slide.is-active{
              opacity: 1;
          }
  
          .l{
              display: grid;
              grid-template-columns: 100px 400px ;
              
              gap: 20px;
              column-gap: 50px;
              
  
             
              width: 500px;
              height: 500px;
              margin:auto;
          }
  
          
      </style>
        @livewireStyles()
        
    </head>
    <body class="">
        @yield('content')
        @livewireScripts()
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
          $(document).ready(function(){
            AOS.init();
           // Add smooth scrolling to all links
           $("a").on('click', function(event) {
         
             // Make sure this.hash has a value before overriding default behavior
             if (this.hash !== "") {
               // Prevent default anchor click behavior
               //event.preventDefault();
         
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

