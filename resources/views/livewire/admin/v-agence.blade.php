<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notif : false
}" class="flex flex-col items-center">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="grid grid-cols-4 gap-5 py-5">
        <div class="flex flex-col gap-4 divide-y-2">
            <h1 class="text-xl font-bold text-right divide-x-4 divide-gray-300">Information de l'agence</h1>
            <div class="flex flex-col gap-5 py-5">
                <input type="text" placeholder="Titre" wire:model="titre">
                <textarea class="flex-1 p-2 placeholder-gray-700 border-2 rounded-lg" placeholder="Libellé" id="lib" wire:model="description"></textarea>
                
                

                
                <div class="flex">
                    <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900" @click="modal=true;save=true;update=false;del=false">Enregistrer</button>        
                    <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                    <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                    <button class="flex-1 text-lg font-bold text-white bg-gray-500 -3" wire:click="resetFields" @click="url='';lib='';id=0">Clear</button>        
                </div>
                
            </div>           
        </div>
        <div class="flex flex-col col-span-3 gap-2 divide-y-2">
            @foreach ($agences as $ligne)
                <div class="grid grid-cols-2">
                    <button type="button" class="flex flex-col items-start p-2 font-bold text-black transition duration-300 shadow cursor-pointer" wire:click="charger({{$ligne}})">
                        <h1 class="w-full px-3 py-1 text-white bg-gray-900 rounded hover:bg-gray-500 text-start"><?php echo $ligne->titre; ?></h1>
                        <p class="text-justify ">{{$ligne->description}}</p>
                    </button>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Modal --}}
    <div class="absolute top-0 left-0 flex items-center justify-center w-screen h-screen gap-10 p-5 text-white black-transparent" x-show="modal" @click="modal=false;" x-transition.500ms>
        <div class="flex flex-col items-center justify-center gap-10 p-5 black-transparent" >
            <div>
                <h1 class="text-2xl font-bold">Message de confirmation</h1>
                <hr>
            </div>
            <p class="px-20 text-xl">
                <span x-text="message"></span>
                <span x-show="save">enregistrer</span>
                <span x-show="update">modifier</span>
                <span x-show="del">supprimer</span>
            </p>
            <hr>
            <div class="flex w-full p-2">
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900 hover:bg-blue-700"   x-show="save" wire:click="store">Enregistrer</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600 hover:bg-yellow-400"   x-show="update" wire:click="update">Modifier</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900 hover:bg-red-700"  x-show="del" wire:click="del">Supprimer</button>
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-gray-500 hover:bg-gray-700" >Annuler</button>
            </div>
        </div>
        <div class="">
            <h1 class="font-extrabold text-9xl">?</h1>
        </div>
    </div>
    <div class="absolute top-0 left-0 w-full bg-black cacher" id="notif4">
        <div class="flex p-2 text-white bg-purple-600">
            <p class="flex-1">{{ session('message') }}</p>
            <button>X</button>
        </div>
    </div>
    {{-- @if (session()->has('message'))
    @endif --}}

    <script>
        var d = document.querySelector('#notif4');
        window.addEventListener('Updated', event => {
            d.style.transform = "scale(0.2)";
            setTimeout(() => {
                d.style.transform = "scale(0.6)";
                setTimeout(() => {
                    d.style.transform = "scale(1)";
                }, 100);
            }, 100);
            setTimeout(() => {
                d.style.transform = "scale(0)";
            }, 3000);
        });
            
    </script>
</div>
