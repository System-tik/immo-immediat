<div class="flex flex-col px-72">
    <div class="flex gap-4 p-5 px-32 mt-5 mb-6 bg-red-500 rounded-lg h-28">
        <div class="w-48 text-white">
            <label for="first_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Type de transaction</label>
            <select class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500" name="" id="">
                <option value="">Location</option>
                <option value="">Achat</option>
                <option value="">Vente</option>
            </select>
        </div>
        <div class="text-white">
            <label for="last_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Type de bien</label>
            <select class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500" name="" id="">
                <option value="">Maison</option>
                <option value="">Appartement</option>
                <option value="">Studio</option>
            </select>
        </div>
        <div class="text-white">
            <label for="last_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Localité</label>
            <input type="text" id="last_name" class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Localité" required>
        </div>
        <div class="text-white">
            <label for="last_name" class="block mb-2 text-sm font-medium dark:text-gray-300">Budget ($)</label>
            <input type="text" id="last_name" class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Budget" required>
        </div>
        <div class="text-red-500 rounded-lg mt-7">
            <button class="block w-full p-2 bg-white rounded-md hover:bg-red-500 hover:text-white hover:border" type="button">Afficher les biens</button>
        </div>
    </div>

    <div class="grid gap-10 xl:grid-cols-4 md:grid-cols-2 lg:grid-cols-3">
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        @foreach ($biens as $b)
        <livewire:components.c-annonce :bien="$b">
        @endforeach
        
    </div>
</div>

