<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex h-screen px-10 pt-10" 
        x-data="
        {
            nav : [false, false, false, false, false, false, true, false],
            active(id){
                if(this.nav[id] != true){
                    this.nav[id] = true;
                    for(let i = 0; i < this.nav.length; i++){
                        if(i != id) this.nav[i] = false;
                    }
                }
            },
        }
        ">
        <div class="w-20 xl:w-72">
            <div class="flex items-center gap-2 px-2 pt-4 pb-10 text-gray-100 border-b border-gray-700">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                <h1 class="hidden text-2xl font-bold xl:flex">Immo-Immediate</h1>
            </div>
            <div class="flex flex-col gap-5">
                <a class="flex items-center w-full gap-2 px-2 py-3 mt-10 font-bold menu-over hover:bg-white hover:text-gray-700" href="#" :class="{'bg-white' : nav[0], 'text-gray-100' : !nav[0]}" @click="active(0)">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <p class="hidden xl:flex">Dashboar</p>
                </a>
                <a class="flex items-center w-full gap-2 px-2 py-3 font-bold menu-over hover:bg-white hover:text-gray-700" href="#" :class="{'bg-white' : nav[1], 'text-gray-100' : !nav[1]}" @click="active(1)">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <p class="hidden xl:flex">Gallerie haeder / pub</p>
                </a>
                <a class="flex items-center w-full gap-2 px-2 py-3 font-bold menu-over hover:bg-white hover:text-gray-700" href="#" :class="{'bg-white' : nav[2], 'text-gray-100' : !nav[2]}" @click="active(2)">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    <p class="hidden xl:flex">Contacts</p>
                </a>
                <a class="flex items-center w-full gap-2 px-2 py-3 font-bold menu-over hover:bg-white hover:text-gray-700" href="#" :class="{'bg-white' : nav[3], 'text-gray-100' : !nav[3]}" @click="active(3)">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    <p class="hidden xl:flex">Comptes sociaux</p>
                </a>
                <a class="flex items-center w-full gap-2 px-2 py-3 font-bold menu-over hover:bg-white hover:text-gray-700" href="#" :class="{'bg-white' : nav[4], 'text-gray-100' : !nav[4]}" @click="active(4)">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    <p class="hidden xl:flex">Motivation</p>
                </a>
                <a class="flex items-center w-full gap-2 px-2 py-3 font-bold menu-over hover:bg-white hover:text-gray-700" href="#" :class="{'bg-white' : nav[5], 'text-gray-100' : !nav[5]}" @click="active(5)">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="hidden xl:flex">Actualité</p>
                </a>
                <a class="flex items-center w-full gap-2 px-2 py-3 font-bold menu-over hover:bg-white hover:text-gray-700" href="#" :class="{'bg-white' : nav[6], 'text-gray-100' : !nav[6]}" @click="active(6)">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    <p class="hidden xl:flex">Gestion des biens</p>
                </a>
                <a class="flex items-center w-full gap-2 px-2 py-3 font-bold menu-over hover:bg-white hover:text-gray-700" href="#" :class="{'bg-white' : nav[7], 'text-gray-100' : !nav[7]}" @click="active(7)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <p class="hidden xl:flex">Propositions</p>
                </a>
            </div>
        </div>
        <div class="flex flex-col flex-1 px-1 py-2 bg-white rounded-2xl ">
            @livewire('navigation-menu')
            <div class="flex-1 px-5 py-5">
                <div x-show="nav[0]">
                    <livewire:admin.v-dash>
                </div>
                <div x-show="nav[1]">
                    <livewire:admin.v-gallerie>
                </div>
                <div x-show="nav[2]">
                    <livewire:admin.v-contact>
                </div>
                <div x-show="nav[3]">
                    <livewire:admin.v-compte>
                </div>
                <div x-show="nav[4]">
                    <livewire:admin.v-motivation>
                </div>
                <div x-show="nav[5]">
                    <livewire:admin.v-actu>
                </div>
                <div x-show="nav[6]">
                    <livewire:admin.v-bien>
                </div>
                <div x-show="nav[7]">
                    <livewire:admin.v-proposition>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
