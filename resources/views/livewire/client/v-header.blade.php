<div class="flex flex-col h-full bg-cover 2xl:py-20 lg:px-32 2xl:px-72 xl:px-32 xl:pb-10" style="background-image: url({{ asset('img/un.jpg') }});">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="flex items-center justify-center lg:hidden py-14">
        <img src="{{ asset('img/lg1.png') }}" alt="" class=" w-28">
    </div>
    <div class="grid grid-cols-1 lg:pt-40 xl:grid-cols-3">
        <div class="flex flex-col items-center justify-center col-span-2 gap-4 text-white xl:items-start xl:py-0 lg:py-10">
            <h1 class="text-2xl font-extrabold lg:text-4xl" data-aos="fade-right" data-aos-duration="2000">IMMO-IMMEDIAT</h1>
            <p class="text-lg font-bold lg:text-2xl" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">Le portail immobilier qu'il vous faut</p>
        </div>
        <form class="" method="post" action="search" x-data= "{btn :'1'}">
            <div class="flex items-center justify-center font-bold">
                <button type="button" class="px-5 py-2 text-gray-600 bg-white border-r-2 focus:py-3 focus:bg-red-600 focus:text-white focus:border-none w-28" :class="{'bg-red-600 text-white py-3 border-none w-28 ':btn=='1'}" @click="btn='1';recupere()">Acheter</button>
                <button type="button" class="px-5 py-2 text-gray-600 bg-white focus:py-3 focus:bg-red-600 focus:text-white w-28"  :class="{'bg-red-600 text-white py-3 border-none w-28 ':btn=='2'}"  @click="btn='2'">Louer</button>
                <button type="button" class="px-5 py-2 text-gray-600 bg-white border-l-2 focus:py-3 focus:bg-red-600 focus:text-white focus:border-none w-28" :class="{'bg-red-600 text-white py-3 border-none w-28 ':btn=='vendre'}" @click="btn='vendre'">Vendre</button>
            </div>
            @csrf
            
            <div class="flex flex-col gap-2 p-5 mt-6 font-bold bg-white" data-aos="zoom-in" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                <h1 class="text-2xl text-gray-700">Ou cherchez vous?</h1>
                <div>
                    <label for="inp" class="p-1 text-xs text-gray-700">LOCALITES</label><br>
                    <input name="ville" type="text"  id="" placeholder="Ajouter une autre localite" class="w-full h-10 text-xs border-gray-400 ">
                </div>
                <div class="grid items-end grid-cols-2 gap-2 md:flex">
                    <div class="w-full">
                        <h3 class="p-1 text-xs text-gray-700">TYPE DE BIENS</h3>
                        <select name="type" type="text"  id="" placeholder="Appartement ..." class="w-full h-10 text-xs border-gray-400 ">
                            <option>Choisir</option>
                            @foreach ($t_biens as $tb)
                            <option value="{{$tb->id}}">{{$tb->lib}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <h3 class="p-1 text-xs text-gray-700">BUDGET</h3>
                        <input name="prix" type="text"  id="" placeholder="Max" class="w-full h-10 text-xs border-gray-400 ">
                    </div>
                    {{-- <input type="hidden" name="annonce" value="1"> --}}
                    <input type="hidden" x-model="btn" id="champs" name="annonce">
                </div>
                <div class="grid items-end grid-cols-1 gap-2 md:flex">
                    <div class="w-full">
                        <button class="flex items-center w-full h-10 gap-1 px-3 py-1 text-white bg-red-500 rounded text-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                            <p class="font-normal ">Recherche</p> 
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
