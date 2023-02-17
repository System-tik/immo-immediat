<div class="px-3 2xl:px-72 lg:px-32 md:px-16 sm:px-8">
    @foreach ($agences as $ag)
    <div class="my-5 text-justify text-gray-500 text-md sm:text-lg">
        <h1 class="py-5 text-lg font-bold sm:text-xl">{{$ag->titre}}</h1>
        <span>
            {{$ag->description}}
        </span>
    </div>
    @endforeach
</div>