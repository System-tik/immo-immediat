<div class="flex flex-col px-3 sm:px-8 md:px-16 lg:px-32 2xl:px-72">
    <div class="grid justify-center grid-cols-2 gap-1 px-1 py-5 mt-5 mb-6 bg-gray-300 rounded-lg shadow-md sm:grid-cols-4 xl:bg-red-500 md:px-2 lg:px-5 xl:px-1 xl:flex ">
        <div class="col-span-2 text-white xl:w-1/5">
            <label for="first_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Type de transaction</label>
            <select wire:model="tpa" class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500" name="" id="">
            @foreach ($type_annonces as $tpa)
                <option value="{{$tpa->id}}" name="tpa">{{$tpa->lib}}</option>
            @endforeach
            </select>
        </div>
        <div class="col-span-2 text-white xl:W-1/6">
            <label for="last_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Type de bien</label>
            <select wire:model="tpb" class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500" name="" id="">
            @foreach ($type_biens as $tpb)
            <option value="{{$tpb->id}}" name="tpb">{{$tpb->lib}}</option>
            @endforeach
            </select>
        </div>
        <div class="col-span-2 text-white xl:W1/6">
            <label for="last_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Localité</label>
            <input wire:model="ville" type="text" name="loc" id="last_name" class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Localité" required>
        </div>
        <div class="col-span-2 text-white xl:W-1/6">
            <label for="last_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Budget ($)</label>
            <input wire:model="prix" type="text" name="budget" id="last_name" class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Budget" required>
        </div>
        <div class="col-end-3 mt-3 text-red-500 rounded-lg sm:col-span-2 sm:col-end-5 md:col-end-5 md:col-span-1 xl:mt-7 xl:W-1/6">
            <button wire:click="searchcat" class="block w-full p-2 bg-white rounded-md" type="button">Afficher les biens</button>
        </div>
    </div>

    @if (count($biens) > 0)
    <div class="grid gap-10 mb-5 xl:grid-cols-3 md:grid-cols-2 lg:grid-cols-2">
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        @foreach ($biens as $b)
        <livewire:components.c-annonce :bien="$b">
        @endforeach
        
    </div>
    @else
    <div class="flex flex-col items-center justify-center mb-12 text-center mt-28">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 mb-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM13.5 10.5h-6" />
        </svg>
        <h4 class="text-xl text-gray-400">Désolé, nous n'avons trouver aucun résultat !</h4>
    </div>
    @endif
    
</div>

