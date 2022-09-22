<div class="bg-cover h-72" style="background-image: url({{ asset('img/f2.jpg') }})" id="footer">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="flex flex-col items-center justify-center h-full gap-10 py-10 bg-gray-900 bg-opacity-75 ">
        <div class="text-white ">
            <div class="flex flex-col items-center justify-center gap-2">
            <h1 class="flex py-2 text-xl md:text-2xl text-start">CONTACTS</h1>               
            @foreach ($contacts as $con)    
            <a href="{{$con->lib == 'Email' ? 'mailto:'.$con->url : ($con->lib == 'Tel' ? 'tel:'.$con->url : '#')}}" class="text-xs md:text-lg">
                <span>{{$con->lib}} :</span>
                <span>{{$con->url}}</span>
            </a>
            @endforeach
            </div>
        </div>
        <div class="text-white ">
            {{--  <h1 class="flex py-2 text-xl text-start">RESEAUX SOCIAUX</h1> --}}
            <div class="grid grid-cols-2 gap-6 sm:flex">
                @foreach ($cmptes as $cpt)     
                <a href="{{$cpt->url}}" class="flex items-center justify-center gap-2">
                    <div class="flex items-center justify-center w-6 h-6 bg-black">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0 0 48 48" style=" fill:#1A1A1A;">
                            <path fill="#FFF" d="{{$cpt->icon}}"></path>
                        </svg>
                    </div>
                    <h1 class="text-xs md:text-lg">{{$cpt->lib}}</h1>
                </a>
                @endforeach
                

            </div>
        </div>
    </div>
    <div class="w-full text-center text-white text-md bg-" style="background-color: #022b55">
        <span class="px-5 my-2 ">&#xA9; 2022 Immo-immediat Directed by Systematik</span>
    </div>
</div>
