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
            <p class="flex text-blue-700">
                <span class="pr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                    </svg>
                </span>
                {{$le_bien->ville}}
            </p>
            <p class="flex text-blue-700">
                {{$le_bien->prix}} {{$le_bien->devise}}
            </p>
        </div>
    </div>
</a>
