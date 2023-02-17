<div x-data="{
    'src' : ''
}" class="px-5 sm:px-10 md:px-20 lg:px-32 2xl:px-72">
    <div class="grid grid-cols-12 gap-2 mt-6">
        {{-- left images box --}}
        <div class="hidden gap-2 lg:flex lg:flex-col">
            @foreach (Storage::files('public/biens/'.$bien->id.'/') as $img)
            <img src="{{ asset(str_replace('public', 'storage', $img)) }}" alt="" class="cursor-pointer rounded-2xl h-20" wire:click="change_img({{$loop->index}})">
            @endforeach
        </div>  
        {{-- central image --}}
        <div class="col-span-12 lg:col-span-7 ">
            <div style="height:384px;" class="w-full h-96 flex justify-center items-center absolute">
                <svg wire:loading aria-hidden="true" class="inline w-20 h-20 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
            </div>
            <img src="{{asset(str_replace('public', 'storage', Storage::files('public/biens/'.$bien->id.'/')[$position]))}}" class="w-full h-40 sm:h-80 lg:h-96 rounded-2xl">
        </div>

        

        {{-- contact us card right --}}
        <div class="items-center justify-center hidden col-span-12 px-2 py-2 border-red-200 lg:col-span-4 lg:py-0 lg:flex lg:px-0 lg:flex-col rounded-2xl lg:border">
            <div class="flex flex-col items-center justify-center lg:mt-10 lg:mb-8">
                <img src="{{ asset('img/lg1.png') }}" class="border rounded-full w-36 h-36" alt="">
                <h1 class="mt-2 text-xl font-bold">IMMO IMMEDIATE</h1>
                <p class="text-sm">12 Haut Commandement, Kinshasa Gombe</p>
            </div>
            <div class="flex flex-col p-2 text-white h-36 rounded-b-2xl">
                <button class="flex items-center justify-center gap-2 py-2 mt-4 bg-red-600 border rounded-lg hover:bg-red-500">
                    Contacter par mail
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>                      
                </button>
                <button class="flex items-cnter justify-center gap-2 py-2 mt-2 text-red-600 bg-white border rounded-lg">
                    Contacter appel
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>                      
                </button>
            </div>
        </div>
    </div>

    <div class="flex flex-col ">
        <div class="flex">
            <div class="flex-col w-full p-3 mt-6 border border-red-200 rounded-2xl xl:p-10">
                <div class="md:flex">
                    <div class="w-full md:basis-2/3">
                        <h3 class="font-semibold text-md">Reference {{$bien->id}}</h3>
                        <h2 class="text-2xl font-bold uppercase">{{$bien->titre}}</h2>
                        <h3 class="text-lg text-gray-500">{{$bien->ville}}, {{$bien->adresse}}</h3>
                        <div class="flex gap-1 mt-8 text-xs xl:text-md xl:gap-5 ">
                            <span class="flex items-center justify-center p-1 border rounded-2xl xl:p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 xl:w-6 xl:h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                                </svg>     
                                {{$bien->chambre + $bien->salon}} piece(s)                     
                            </span>
                            <span class="flex items-center justify-center p-1 border rounded-2xl xl:p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 xl:w-6 xl:h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                                </svg>                          
                                {{$bien->chambre}} chambre(s)
                            </span>
                            {{-- <span class="flex items-center justify-center p-1 border rounded-2xl xl:p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 xl:w-6 xl:h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                                </svg>                          
                                500 m²
                            </span> --}}
                        </div>
                    </div>
                    <div class="w-full mt-2 md:basis-1/3 md:mt-0">
                        <h2 class="mb-5 text-2xl font-semibold text-red-600">
                            
                            {{($bien->lib == 'A vendre') ? $bien->lib.' ('.$bien->prix.' '.$bien->devise.')' : 'Loyer '.$bien->prix.' '.$bien->devise.'/mois'}}
                        </h2>
                        <p class="text-xs text-justify">
                            Contactez-nous 
                        </p>
                        <div class="flex gap-1 mt-8 text-sm">
                            <span class="inline-flex p-2 border rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>                                      
                            </span>
                            <span class="inline-flex px-2 py-2">Partager :</span>
                            <span class="inline-flex p-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 48 48" style=" fill:#1A1A1A;">
                                    <path fill="#3F51B5" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path><path fill="#FFF" d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z">
                                    </path>
                                </svg>                                   
                            </span>
                            <span class="inline-flex p-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 48 48" style=" fill:#000000;">
                                    <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd">
                                    </path>
                                </svg>                                     
                            </span>
                        </div>
                    </div>
                </div>
                <hr class="mt-3 font-bold">
                <div class="flex mt-3">
                    <p class="font-serif text-justify">{{$bien->description}}</p>
                </div>

                <div class="flex flex-col gap-10 px-5 mt-6 md:flex-row md:px-0">
                    {{-- Creer compte --}}
                    <div class="w-full md:basis-1/2">
                        <h2 class="mb-3 text-xl font-bold">Caracteristiques</h2>
                        @foreach ($bien->caract_bien as $cb)
                        @foreach ($caracts as $c)
                        @if ($cb == $c->id)
                            
                        <span class="px-5 py-1 text-lg bg-gray-200 rounded-md">
                            {{$c->lib}}
                        </span>
                        @endif
                        @endforeach
                            
                        @endforeach
                        
                    </div>

                    {{-- Se connecter --}}
                    {{-- <div class="w-full md:basis-1/2">
                        <h2 class="mb-3 text-xl font-bold text-center">Vous êtes déjà inscrit ?</h2>
                        <form class="flex flex-col items-center mt-5">
                            <div class="flex flex-col">
                                Adresse email :
                                <input type="text">
                            </div>
                            <div class="flex flex-col mt-2 basis-2/4">
                                Mot de passe :
                                <input type="password">
                            </div>
                            <button class="flex items-center justify-center w-1/2 gap-2 py-2 mt-5 text-sm font-bold text-white bg-red-600 border rounded-lg hover:bg-red-500">
                                S'identifier                 
                            </button>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- <div class="flex">
            <div class="w-full mt-3 mb-3 x ">
                <h3 class="mb-3 text-sm font-bold">
                    Mentions légales
                </h3>
                <p class="text-sm text-justify">
                    Affichage des informations légales : FRIMMOBILIER | Raison sociale : FRIMMOBILIER | Adresse siège social : 12 RUE DE PARIS - 78560 PORT-MARLY | Siret : 32137690700044 | RCS : VERSAILLES | Numero TVA Intracommunautaire : NC | Forme juridique : SARL | Capital social : 7 623 € | Assurance RCP : NC |
                    Carte T : CPI78012018000033869 | Date de délivrance : NC | Lieu de délivrance : NC | Caisse de garantie financière : SERENIS. | N° de caisse de garantie : VD7000001/3698 | Adresse caisse de garantie : 26 AVENUE VICTOR HUGO 75006 PARIS | Montant de la garantie financière : NC | Nom du médiateur : NC | Adresse du médiateur : NC | Adresse du site : NC |
                    Entreprise juridiquement et financièrement indépendante
                </p>
            </div>
        </div> --}}

    </div>
</div>
