<div class="grid h-full gap-20 px-5 py-20 bg-gray-100 xl:px-32 2xl:px-72 lg:px-32 lg:grid-cols-2" id="agence">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex-1" data-aos="fade-right" data-aos-duration="500">
        <div class="flex flex-col items-center justify-center bg-cover rounded-2xl 2xl:h-96 xl:h-72" style="background-image: url('{{asset('img/Kinshasa-capital-de-la-República-Democrática-del-Congo.jpg')}}')">
            <img src="{{asset('img/mascote homme immo immédia.png')}}" class="w-24 ">
            <h1 class="text-2xl font-bold text-white">www.immo-immediat.com</h1>
        </div>
    </div>
    <div class="flex flex-col justify-center flex-1 " data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
        <h1 class="text-2xl lg:text-4xl">Découvrez notre agence</h1>
        <div class="py-10">
            <p class="text-justify" data-aos="zoom-in"data-aos-anchor-placement="top-bottom" data-aos-duration="4000">
                {{$agences[0]->description}}
            </p>
        </div>
        <div>
            <a href="{{route('agence')}}" class="px-10 py-3 font-bold text-white bg-red-700 rounded-sm ">Decouvrir</a>
        </div>
    </div>
</div>