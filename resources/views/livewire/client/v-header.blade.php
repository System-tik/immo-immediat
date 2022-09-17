<div class="flex flex-col h-full bg-cover lg:py-20 lg:px-32 2xl:px-72 xl:px-20 " style="background-image: url({{ asset('img/un.jpg') }});">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="flex items-center justify-center lg:hidden py-14">
        <img src="{{ asset('img/lg1.png') }}" alt="" class=" w-28">
    </div>
    <div class="grid grid-cols-1 lg:pt-40 xl:grid-cols-3">
        <div class="flex flex-col items-center justify-center col-span-2 gap-4 text-white xl:items-start xl:py-0 lg:py-10">
            <h1 class="text-2xl font-extrabold lg:text-4xl">IMMO-IMMEDIAT</h1>
            <p class="text-lg font-bold lg:text-2xl">Le portail immobilier qu'il vous faut</p>
        </div>
        <div class="">

            <div class="flex items-center justify-center font-bold">
                <button class="px-5 py-2 text-gray-600 bg-white border-r-2 focus:py-3 focus:bg-red-600 focus:text-white focus:border-none w-28">Acheter</button>
                <button class="px-5 py-2 text-gray-600 bg-white focus:py-3 focus:bg-red-600 focus:text-white w-28">Louer</button>
                <button class="px-5 py-2 text-gray-600 bg-white border-l-2 focus:py-3 focus:bg-red-600 focus:text-white focus:border-none w-28">Vendre</button>
            </div>
            <div class="flex flex-col gap-2 p-5 mt-6 font-bold bg-white">
                <h1 class="text-2xl text-gray-700">Ou cherchez vous?</h1>
                <div>
                    <label for="inp" class="p-1 text-xs text-gray-700">LOCALITES</label><br>
                    <input type="text" name="" id="" placeholder="Ajouter une autre localite" class="w-full h-10 text-xs border-gray-400 ">
                </div>
                <div class="grid items-end grid-cols-2 gap-2 md:flex">
                    <div class="w-full">
                        <h3 class="p-1 text-xs text-gray-700">TYPE DE BIENS</h3>
                        <input type="text" name="" id="" placeholder="Appartement ..." class="w-full h-10 text-xs border-gray-400 ">
                    </div>
                    <div class="w-full">
                        <h3 class="p-1 text-xs text-gray-700">SURFACE</h3>
                        <input type="text" name="" id="" placeholder="Min" class="w-full h-10 text-xs border-gray-400 ">
                    </div>
                    
                </div>
                <div class="grid items-end grid-cols-2 gap-2 md:flex">
                    <div class="w-full">
                        <h3 class="p-1 text-xs text-gray-700">BUDGET</h3>
                        <input type="text" name="" id="" placeholder="Max" class="w-full h-10 text-xs border-gray-400 ">
                    </div>
                    <div class="w-full">
                        <button class="flex items-center w-full h-10 gap-1 px-3 py-1 text-white bg-red-500 rounded text-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                            <p class="font-normal ">Recherche</p> 
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-1 py-3 text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white bg-red-500 rounded-xl">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                    </svg>
                    <p class="text-gray-600">Plus de criteres</p>
                </div>
            </div>
        </div>
    </div>
</div>
