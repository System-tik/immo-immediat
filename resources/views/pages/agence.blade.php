@extends('app')
<div class="">
    <div class="h-32 bg-red-500">
        <livewire:client.v-nav>
    </div>

    <div class="">
        <div style="background-image: url({{asset('img/f3.jpg')}})" class="bg-cover md:h-72 sm:h-52 h-36 lg:h-96">
            <div class="flex items-center h-full bg-t-black">
                <h1 class="ml-3 text-lg font-bold text-white sm:text-xl lg:text-3xl 2xl:ml-72 lg:ml-32 md:ml-16 sm:ml-8"> <span class="text-2xl sm:text-3xl lg:text-5xl">A</span> PROPOS DE IMMO-IMMEDIAT</h1>
            </div>
        </div>
        <livewire:client.v-agence>
    </div>

    <livewire:client.v-footer>
</div>