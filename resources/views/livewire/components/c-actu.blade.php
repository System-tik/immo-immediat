@forelse ($actualites as $actu)
    <div class="transition-all duration-700 transform bg-cover cursor-pointer hover:p-1 h-72 group" style="background-image: url('{{asset('storage/actualite/'.$actu->id.'.png')}}')">
        <div class="flex flex-col items-start justify-end h-full text-white border border-transparent group-hover:items-center group-hover:justify-end group-hover:bg-gradient-to-b group-hover:from-black group-hover:via-transparent group-hover:to-black bg-gradient-to-b from-transparent via-transparent to-black ">
                <h1 class="px-5 py-2 text-2xl group-hover:px-0">Titre: {{$actu->titre}}</h1>
                <h3 class="px-5 hover:text-blue-600"><a href="{{$actu->url}}" >Lien: {{$actu->url}}</a></h3>
                <div class="hidden p-4 group-hover:block animate__animated animate__flipInX">
                    <p class="text-lg text-justify">
                        {{$actu->descrip}}
                    </p>
                </div>
        </div>
    </div>
@empty
    <span>Aucune actualité disponible</span>
@endforelse
    
