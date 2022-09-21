{{-- nav pour lg --}}
<div class="absolute items-center justify-between hidden w-full lg:flex xl:gap-10 xl:px-32 lg:gap-5 2xl:text-md 2xl:gap-20 2xl:px-72 lg:px-32" id="nav">
    {{-- Stop trying to control. --}}
    <div class="flex items-center gap-10 xl:gap-20 ">
        <a href="/" class="px-2 pt-8 bg-gradient-to-b from-transparent to-black">
            <img src="{{ asset('img/lg1.png') }}" alt="" class="w-28 ">
        </a>
    </div>
    <div class="hidden gap-8 pt-10 text-white lg:flex">
        <div class="flex items-center gap-8">
            <a href="/#annonces">Annonces</a>
            {{-- <a href="#">Location</a> --}}
            {{-- <a href="#">Biens vendus</a>
            <a href="#">Gestion</a>
            <a href="#">Estimation</a> --}}
            <a href="/#agence">Agence</a>
            <a href="/#actus">Actualites</a>
            {{-- <a href="#">contact</a> --}}
            <a class="flex items-center gap-2 px-2 py-1 text-gray-700 bg-white rounded" href="#footer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <span>Nous contacter</span>
            </a>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
            </button>

        </div>
    </div>
</div>

{{-- nav xs,sm,md --}}
<div class="absolute w-full lg:hidden">
    <div class="flex justify-between px-2 py-2">
        <div>
            <div class="">
                {{-- <img src="{{ asset('img/lg1.png') }}" alt="" class="w-16 "> --}}
            </div>
        </div>
        <div class="text-white ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
    </div>
</div>
