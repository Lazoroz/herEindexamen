<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        
            <form method="POST" action="{{ route('inschrijving.update', $inschrijving) }}">
                @csrf
                @method('patch')

                <x-input-label for="naam" :value="__('Naam')" />
                <x-text-input id="naam" class="block mt-1 w-full" type="text" name="naam" :value="$inschrijving->naam" required  /> 
                <x-input-error :messages="$errors->get('naam')" class="mt-2" />

                <x-input-label for="telefoon" :value="__('Telefoon')" />
                <x-text-input id="tele" class="block mt-1 w-full" type="number" name="telefoon" :value="$inschrijving->telefoon" required  /> 
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <x-input-label for="adres" :value="__('Adress')" />
                <x-text-input id="adres" class="block mt-1 w-full" type="text" name="adres" :value="$inschrijving->adres" required  /> 
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <x-input-label for="woonplaats" :value="__('Woonplaats')" />
                <x-text-input id="woonplaats" class="block mt-1 w-full" type="text" name="woonplaats" :value="$inschrijving->woonplaats" required  /> 
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                
                <x-input-label for="geboortedatum" :value="__('Geboortedatum')" />
                <x-text-input id="geboortedatum" class="block mt-1 w-full" type="date" name="geboortedatum" :value="$inschrijving->geboortedatum" required  /> 
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <x-input-label for="geslacht" :value="__('Geslacht')" />
                <select id="geslacht" name="geslacht" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected> {{ $inschrijving->geslacht }}</option>
                <option value="man">Man</option>
                <option value="vrouw">Vrouw</option>
                <option value="gendernutraal">Gendernutraal</option>
                </select>


                <div class="mt-4 space-x-2">
                    <x-primary-button type="submit">{{ __('Save') }}</x-primary-button>
                    <a href="{{ route('inschrijving.index') }}">{{ __('Cancel') }}</a>
                </div>
                
            </form>

        </div>
    </div>
    
</x-app-layout>