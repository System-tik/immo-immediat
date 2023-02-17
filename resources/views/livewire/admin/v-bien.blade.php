<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notif : false,
    props : false,
    gallerie : false,
    caract : false
}">
    <div class="flex flex-col gap-2">
        {{-- menu superieur --}}
        <div class="flex items-center justify-between bg-black">
            <button class="px-10 py-5 text-white transition duration-200 transform bg-red-900 hover:bg-red-700 hover:scale-105" @click="props=true">
                Cliquez ici pour gerer les propriétés des biens
            </button>
            <h1 class="px-3 text-xl font-bold text-right text-gray-300 divide-x-4">Gestion des biens ou annonces</h1>
        </div>
        {{-- contenu --}}
        <div class="flex w-full gap-2">
            <div class="flex flex-col gap-4 px-3 py-5 shadow-lg" style="width:430px;">
                {{-- <h1 class="text-2xl">Données du bien</h1> --}}
                <div class="flex-1">
                    <select name="" id="" class="w-full py-2 border" wire:model="type_bien_id">
                        <option value="">Type Bien</option>
                        @foreach ($type_bs as $tb)
                            <option value="{{$tb->id}}">{{$tb->lib}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Titre" wire:model="titre">
                <textarea type="text" class="flex-1 w-full p-2 border rounded-lg h-44" placeholder="Description" wire:model="description"></textarea>
                <div class="flex flex-1 gap-2">
                    <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Nbr Salon" wire:model="salon">
                    <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Nbr Chambre" wire:model="chambre">
                </div>
                {{-- Etat/Equipe --}}
                <div class="flex items-center justify-center flex-1 gap-4 bg-gray-100">
                    <div class="flex items-center justify-center flex-1 gap-3 px-2 py-2 border-r">
                        <label for="etat" class="flex-1">Etat</label>
                        <!-- Rounded switch -->
                        <label class="switch">
                            <input type="checkbox" id="etat" wire:model="etat">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="flex items-center justify-center flex-1 gap-3 px-2 py-2 ">
                        <label for="equipe" class="flex-1">Maison equipe ?</label>
                        <!-- Rounded switch -->
                        <label class="switch">
                            <input type="checkbox" id="equipe" wire:model="equipe"> 
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Adresse" wire:model="adresse">
                <div class="flex flex-1 gap-2">
                    <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Prix" wire:model="prix">
                    <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Devise" wire:model="devise">
                </div>
                <input type="text" class="flex-1 w-full p-2 border rounded-lg" placeholder="Ville" wire:model="ville">
                <div class="flex-1">
                    <select name="" id="" class="w-full py-2 border" wire:model="type_annonce_id">
                        <option value="">Type annonce</option>
                        @foreach ($type_as as $ta)
                            <option value="{{$ta->id}}">{{$ta->lib}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="py-2">
                    {{-- Attribuer modifier et supprimers  des caracteristiques à un bien --}}
                    <div class="absolute flex p-5 -mt-64 bg-white shadow-2xl" x-show="caract" x-transition.500ms>
                        <div class="flex flex-col pr-5 border-r border-gray-200">
                            @foreach ($caracts as $car)
                                {{-- <button x-show="$wire.caract_bien.length == 0" class="px-1 text-white bg-yellow-600 border-t border-r cursor-pointer" wire:click="add({{$car->id}})">{{$car->lib}}</button>
                                <button x-show="$wire.caract_bien.length > 0" :class="{'bg-red-600' : $wire.select(<?php //echo $car['id']; ?>)}"  class="px-1 text-white border-t border-r cursor-pointer" wire:click="add({{$car->id}})">{{$car->lib}}</button>
                                <p x-show="$wire.caract_bien.length > 0" x-text="$wire.select(<?php //echo $car['id']; ?>)"></p> --}}
                                <div wire:click="carEdit({{$car->id}})" class="px-5 py-2 text-white bg-green-900 border-b cursor-pointer hover:bg-green-700">
                                    <p>{{$car->lib}}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex flex-col flex-1 gap-4 pl-5 w-96">
                            <div class="flex items-center justify-between w-full">
                                <h1 class="font-bold">Ajouter/enlever des caracteristiques</h1>
                                <button class="px-2 py-1 text-lg text-white bg-red-600 shadow-xl" @click="caract=!caract">X</button>
                            </div>
                            <div>
                                <p>Selection</p>
                                <hr>
                                <ul>
                                    @foreach ($caracts_bien_selected as $cbs)
                                        <li>{{$cbs['lib']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button class="w-full px-3 py-2 text-white bg-green-800" @click="caract=!caract">
                        Gestion Caracteristique
                    </button>
                </div>
                <div class="flex">
                    <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900" @click="modal=true;save=true;update=false;del=false">Enregistrer</button>        
                    <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                    <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                    <button class="flex-1 text-lg font-bold text-white bg-gray-500 -3" wire:click="resetFields" @click="url='';actu='';id=0">Clear</button>        
                </div>
            </div>
            <div class="flex-1">
                {{-- Contenu grid biens --}}
                @if ($errors->any())
                <div class="p-2 bg-red-300 ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="grid grid-cols-2 gap-2 2xl:grid-cols-3 ">
                    @foreach ($biens as $b)    
                    <div class="flex flex-col p-1 shadow-xl cursor-pointer" wire:click="charger({{$b}})">
                        @if (Storage::exists(Storage::files('public/biens/'.$b->id)[0]))    
                            <img 
                                src="{{asset(str_replace('public', 'storage', Storage::files('public/biens/'.$b->id)[0]))}}?{{ rand()}}" 
                                alt="Pas d'image pour cette info"  
                                class="w-full"
                                style="height: 160px;">
                        @endif
                        <p class="text-center">
                            <b>{{$b->b}}</b> / <b>{{$b->an}}</b> 
                        </p>
                        <div class="px-1 py-2 bg-gray-100">
                            <p>{{$b->description}}</p>
                            <button class="w-full px-2 py-1 bg-gray-200" @click="gallerie=true">Voir gallerie</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    {{-- Proprietes des biens --}}
    <div class="absolute top-0 left-0 flex flex-col w-screen h-screen gap-3 bg-t-black" x-transition.500ms x-show="props">
        <div class="flex items-center justify-between text-white bg-black">
            <p class="px-5"><b>Caracteristique / Type de biens / Type d'annonces</b></p>
            <button class="p-2 text-white bg-red-600" @click="props=false">X</button>
        </div>
        <div class="flex justify-center bg-white">
            <div class="flex-1 shadow-lg">
                <livewire:admin.v-caracteristique/>
            </div>
            <div class="flex-1">
                <livewire:admin.v-type-bien/>
            </div>
            <div class="flex-1 shadow-lg">
                <livewire:admin.v-type-annonce/>
            </div>
        </div>
    </div>

     {{-- Modal --}}
     <div class="absolute top-0 left-0 flex items-center justify-center w-screen h-screen gap-10 p-5 text-white bg-t-black" x-show="modal"  x-transition.500ms>
        <div class="flex flex-col items-center justify-center w-full gap-10 p-5 bg-t-black" >
            <div x-data="{ isUploading : false, progress : 0 }"
                x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false" 
                x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress"
            >
                <div x-show="save" class="flex flex-col items-center justify-center gap-5">
                    {{-- <h1 class="py-3 text-3xl text-left text-white">Parcourir des images pour le bien</h1> --}}
                    <h1 class="text-2xl font-bold">Parcourir des images pour le bien</h1>
                    <div class="flex gap-5">
                        {{-- Button parcourir images --}}
                        <label class="flex items-center justify-center px-4 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            <span class="px-3 mt-2 text-base leading-normal">Parcourir une image</span>
                            <input type="file" class="hidden" wire:model="galleries" multiple />
                            <div x-show="isUploading" class="h-full">
                                <progress max="100" x-bind:value="progress">
                                    <b x-text="progress"></b>%
                                </progress>
                            </div>
                        </label>
                    </div>
                    {{-- Chargement images --}}
                    <div class="grid grid-cols-6 gap-4 py-5">
                        @if ($galleries)
                        @foreach ($galleries as $gal)
                            <img src="{{ $gal->temporaryUrl() }}" alt="Pas d'image ici " srcset="" class="flex-1">                    
                        @endforeach
                        @endif
                    </div>
                </div>
                {{-- Confirmation --}}
                <h1 class="text-2xl font-bold">Message de confirmation</h1>
                <hr>
            </div>
            <p class="px-20 text-xl">
                <span x-text="message"></span>
                <span x-show="save">enregistrer</span>
                <span x-show="update">modifier</span>
                <span x-show="del">supprimer</span>
                <span class="font-extrabold text-9xl">?</span>
            </p>
            <hr>
            <div class="flex justify-end w-full p-2" @click="modal=false;">
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900 hover:bg-blue-700"   x-show="save" wire:click="store">Enregistrer</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600 hover:bg-yellow-400"   x-show="update" wire:click="update">Modifier</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900 hover:bg-red-700"  x-show="del" wire:click="del">Supprimer</button>
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-gray-500 hover:bg-gray-700" >Annuler</button>
            </div>
        </div>
    </div>
    <div class="absolute top-0 left-0 w-full bg-black cacher" id="notif3">
        <div class="flex p-2 text-white bg-purple-600">
            <p class="flex-1">{{ session('message') }}</p>
            <button>X</button>
        </div>
    </div>
    {{-- @if (session()->has('message'))
    @endif --}}

    {{-- gallerie --}}
    <div class="absolute top-0 left-0 flex flex-col w-screen h-screen bg-t-black" x-show="gallerie" x-transition.500ms>
        <div class="flex items-center justify-between text-white bg-black">
            <p class="px-5"><b>Gallerie d'images du bien</b></p>
            <button class="p-2 text-white bg-red-600" @click="gallerie=false">X</button>
        </div>
        <div class="flex items-start justify-start px-2 py-2">
            <div class="grid flex-1 grid-cols-3 gap-2">
                @foreach (Storage::files('public/biens/'.$selected) as $gal)
                {{-- <p>{{str_replace('public', 'storage', $gal)}}</p> --}}
                <div class="flex flex-col w-full p-1 shadow-xl cursor-pointer bg-gray-50" wire:click="edit('{{str_replace('public', 'storage', $gal)}}')">
                    <img src="{{asset(str_replace('public', 'storage', $gal))}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="w-full " style="height: 300px;">
                    <button class="px-2 py-1 text-white bg-gray-800" >
                        Edit
                    </button>
                </div>
                @endforeach
            </div>
            {{-- update gallerie --}}
            <div class="flex flex-col items-start justify-start px-5 pb-5 bg-gray-900" x-data="{ isUploading : false, progress : 0 }" style="width: 400px;"
            x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false" 
            x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <div class="flex gap-5 py-2">
                {{-- Button ajouter gallerie des dans images --}}
                <label class="flex flex-col items-center justify-center px-4 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                    <span class="px-3 mt-2 text-base leading-normal">Ajouter des images</span>
                    <input type="file" class="hidden" wire:model="galleries" multiple />
                    <div x-show="isUploading" class="h-full">
                        <progress max="100" x-bind:value="progress">
                            <b x-text="progress"></b>%
                        </progress>
                    </div>
                </label>
                <button class="flex-1 px-1 py-2 text-white bg-blue-900 gray-500" wire:click="addImg">
                    Valider
                </button>
            </div>
                <img src="{{asset($selectedGal)}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="w-full" style="height: 300px;">
                <div class="grid w-full grid-cols-2 gap-2 px-1 py-2 bg-gray-50">
                    <button class="w-full px-2 py-1 text-white bg-red-700" wire:click="deleteImg">Supprimer image</button>
                    <label class="flex flex-col items-center justify-center px-2 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                        <span class="px-2 text-base leading-normal">Changer image</span>
                        <input type='file' class="hidden" wire:model="photo" />
                        <div x-show="isUploading" class="h-full">
                            <progress max="100" x-bind:value="progress">
                                <b x-text="progress"></b>%
                            </progress>
                        </div>
                    </label>
                </div>
                @if ($photo)
                <div class="px-1 py-3 bg-gray-100">
                    <p class="py-2 text-center">Previsualisation</p>
                    <img src="{{ $photo->temporaryUrl() }}" alt="Pas d'image ici " srcset="" class="w-full" style="height: 300px;">                    
                    <div class="flex py-2">
                        <button class="flex-1 px-1 py-2 gray-500">
                            Annuler
                        </button>
                        <button class="flex-1 px-1 py-2 text-white bg-blue-900 gray-500" wire:click="updateImg">
                            Valider
                        </button>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
    <script>
        var c = document.querySelector('#notif3');
        window.addEventListener('Updated', event => {
            c.style.transform = "scale(0.2)";
            setTimeout(() => {
                c.style.transform = "scale(0.6)";
                setTimeout(() => {
                    c.style.transform = "scale(1)";
                }, 100);
            }, 100);
            setTimeout(() => {
                c.style.transform = "scale(0)";
            }, 3000);
        });
            
    </script>

</div>
