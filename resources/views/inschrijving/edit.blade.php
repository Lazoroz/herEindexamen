<x-app-layout>
    <div class=" p-6 mt-3 mx-2 min-h-5 overflow-hidden sm:rounded-lg bg-white shadow-sm rounded-lg">
        
            <form method="POST" action="{{ route('inschrijving.update', $inschrijving) }}">
                @csrf
                @method('patch')

                <x-input-label for="naam" :value="__('Naam')" />
                <x-text-input id="naam" class="block mt-1 w-full" type="text" name="naam" :value="$inschrijving->naam" required  /> 
                <x-input-error :messages="$errors->get('naam')" class="mt-2" />

                <x-input-label for="telefoon" :value="__('Telefoon')" />
                <x-text-input id="telefoon" class="block mt-1 w-full" type="number" name="telefoon" :value="$inschrijving->telefoon" required  /> 
                <x-input-error :messages="$errors->get('telefoon')" class="mt-2" />

                <x-input-label for="adres" :value="__('Adress')" />
                <x-text-input id="adres" class="block mt-1 w-full" type="text" name="adres" :value="$inschrijving->adres" required  /> 
                <x-input-error :messages="$errors->get('adres')" class="mt-2" />

                <x-input-label for="woonplaats" :value="__('Woonplaats')" />
                <x-text-input id="woonplaats" class="block mt-1 w-full" type="text" name="woonplaats" :value="$inschrijving->woonplaats" required  /> 
                <x-input-error :messages="$errors->get('woonplaats')" class="mt-2" />
                
                <x-input-label for="geboortedatum" :value="__('Geboortedatum')" />
                <x-text-input id="geboortedatum" class="block mt-1 w-full" type="date" name="geboortedatum" :value="$inschrijving->geboortedatum" required  /> 
                <x-input-error :messages="$errors->get('geboortedatum')" class="mt-2" />

                <x-input-label for="geslacht" :value="__('Geslacht')" />
                <select id="geslacht" name="geslacht" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
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
    
</x-app-layout>