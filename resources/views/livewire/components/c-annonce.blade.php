<a class="flex flex-col transition duration-200 transform shadow rounded-3xl group" href="#">
    {{-- Stop trying to control. --}}
    <div class="relative flex flex-col justify-between px-5 transition duration-500 transform bg-cover rounded-3xl h-52 group-hover:h-60" style=" background-image:url('{{asset(Storage::url('public/biens/'.$le_bien->id.'/0.png'))}}')">
        <div class="flex gap-2 py-5">
            <div class="px-2 text-white rounded-lg bg-t-black">{{count(Storage::files('public/biens/'.$le_bien->id))}} Photo(s)</div>
            <div class="px-2 text-white rounded-lg bg-t-black">Favoris </div>
        </div>
        <div class="">
            <span class="relative px-2 py-1 text-white bg-blue-900 rounded-lg top-3">{{$le_bien->lib}}</span>
        </div>
    </div>
    <div class="flex flex-col justify-between px-5 py-5">
        <div class="flex-1">
            <h1 class="font-bold ">{{$le_bien->titre}}</h1>
            <div class="h-20">
                <p class="text-justify">{{substr($le_bien->description, 0, 100)}}...</p>
            </div>
        </div>
        <div class="flex items-center justify-between pt-5 border-t">
            <p class="text-blue-700">{{$le_bien->prix}} {{$le_bien->devise}}</p>
        </div>
    </div>
</a>
