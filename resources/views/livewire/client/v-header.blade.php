<div class="h-full bg-cover flex flex-col items-center justify-center" style="background-image: url({{ asset('img/un.jpg') }}); height:800px">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="">
        <div class="flex  items-center justify-center">
            <button class="bg-white text-gray-600 py-2 px-5 focus:py-3 focus:bg-red-600 focus:text-white focus:border-none border-r-2 w-28">Acheter</button>
            <button class="bg-white text-gray-600 py-2 px-5 focus:py-3 focus:bg-red-600 focus:text-white w-28">Louer</button>
            <button class="bg-white text-gray-600 py-2 px-5 focus:py-3 focus:bg-red-600 focus:text-white focus:border-none border-l-2 w-28">Vendre</button>
        </div>
        <div class="bg-white p-5 mt-6 flex-col flex gap-2">
            <h1 class="text-2xl text-gray-700">Ou cherchez vous?</h1>
            <div>
                <label for="inp" class="text-gray-700 text-xs p-1">LOCALITES</label><br>
                <input type="text" name="" id="" placeholder="Ajouter une autre localite" class="text-xs h-10 w-full border-gray-400 ">
            </div>
            <div class="md:flex gap-2 items-end grid grid-cols-2">
                <div>
                    <h3 class="text-xs text-gray-700 p-1">TYPE DE BIENS</h3>
                    <input type="text" name="" id="" placeholder="Appartement ..." class="text-xs h-10 w-full border-gray-400 ">
                </div>
                <div>
                    <h3 class="text-xs text-gray-700 p-1">SURFACE</h3>
                    <input type="text" name="" id="" placeholder="Min" class="text-xs h-10 w-full border-gray-400 ">
                </div>
                <div >
                    <h3 class="text-xs text-gray-700 p-1">BUDGET</h3>
                    <input type="text" name="" id="" placeholder="Max" class="text-xs h-10 w-full border-gray-400 ">
                </div>
                <div>
                    <button class="flex gap-1 text-white text-md bg-red-500 py-1 px-3 rounded h-10 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                        <p>Recherche</p> 
                    </button>
                </div>
            </div>
            <div class="flex gap-1 text-xs items-center justify-center py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 bg-red-500 text-white rounded-xl">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                  </svg>
                  
                <p class="text-gray-600">Plus de criteres</p>
            </div>
        </div>
    </div>
</div>
