{{-- nav pour lg --}}
<div class="hidden lg:flex lg:px-10 xl:gap-10 xl:px-28 lg:gap-5  2xl:text-md 2xl:gap-20 items-center 2xl:px-72 absolute w-full ">
    {{-- Stop trying to control. --}}
    <div class="flex xl:gap-20 gap-10 items-center ">
        <div class=" bg-gradient-to-r from-gray-700 via-gray-900 to-black pt-8 px-2 ">
            <img src="{{ asset('img/lg1.png') }}" alt="" class="w-28 ">
        </div>
        <div class="pt-10 lg:flex hidden">
            <button class="text-gray-700 bg-white py-1 px-2 rounded flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>
              <span>Nous contacter</span>
            </button>
        </div>

    </div>
    <div class="hidden lg:flex gap-8 text-white pt-10">
        <div class="flex gap-8">
            <div>Vente</div>
            <div>Location</div>
            <div>Biens vendus</div>
            <div>Gestion</div>
            <div>Estimation</div>
            <div>Agence</div>
            <div>Actualites</div>
            <div>contact</div>

        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
        </div>
    </div>
</div>

{{-- nav xs,sm,md --}}
<div class=" absolute w-full lg:hidden">
    <div class="flex justify-between">
        <div>
            <div class=" bg-gradient-to-r from-gray-700 via-gray-900 to-black pt-4 px-2 ">
                <img src="{{ asset('img/lg1.png') }}" alt="" class="w-16 ">
            </div>
        </div>
        <div class="text-white text-between flex items-end">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
              
        </div>
    </div>
</div>
