<div class="flex flex-col px-3 sm:px-8 md:px-16 lg:px-32 2xl:px-72">
    <div class="grid justify-center grid-cols-2 gap-1 px-1 py-5 mt-5 mb-6 bg-gray-300 rounded-lg shadow-md sm:grid-cols-4 xl:bg-red-500 md:px-2 lg:px-5 xl:px-1 xl:flex ">
        <div class="col-span-2 text-white xl:w-1/5">
            <label for="first_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Type de transaction</label>
            <select class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500" name="" id="">
                <option value="">Location</option>
                <option value="">Achat</option>
                <option value="">Vente</option>
            </select>
        </div>
        <div class="col-span-2 text-white xl:W-1/6">
            <label for="last_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Type de bien</label>
            <select class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500" name="" id="">
                <option value="">Maison</option>
                <option value="">Appartement</option>
                <option value="">Studio</option>
            </select>
        </div>
        <div class="col-span-2 text-white xl:W1/6">
            <label for="last_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Localité</label>
            <input type="text" id="last_name" class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Localité" required>
        </div>
        <div class="col-span-2 text-white xl:W-1/6">
            <label for="last_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Budget ($)</label>
            <input type="text" id="last_name" class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Budget" required>
        </div>
        <div class="col-end-3 mt-3 text-red-500 rounded-lg sm:col-span-2 sm:col-end-5 md:col-end-5 md:col-span-1 xl:mt-7 xl:W-1/6">
            <button class="block w-full p-2 bg-white rounded-md hover:bg-red-500 hover:text-white hover:border" type="button">Afficher les biens</button>
        </div>
    </div>

    <div class="grid gap-10 mb-5 xl:grid-cols-3 md:grid-cols-2 lg:grid-cols-2">
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        @foreach ($biens as $b)
        <livewire:components.c-annonce :bien="$b">
        @endforeach
        
    </div>
</div>

