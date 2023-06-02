<x-guest-layout>
    <div class="max-w-2xl mx-auto  sm:p-6 lg:p-1">
     
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <x-input-label for="naam" :value="__('Naam')" />
            <x-text-input id="naam" class="block mt-1 w-full" type="text" name="naam" :value="old('naam')" required  /> 
            <x-input-error :messages="$errors->get('naam')" class="mt-2" />

            <x-input-label for="telefoon" :value="__('Telefoon')" />
            <x-text-input id="telefoon" class="block mt-1 w-full" type="number" name="telefoon" :value="old('telefoon')"  required  /> 
            <x-input-error :messages="$errors->get('telefoon')" class="mt-2" />

            <x-input-label for="adres" :value="__('Adress')" />
            <x-text-input id="adres" class="block mt-1 w-full" type="text" name="adres" max="10" :value="old('email')"  required  /> 
            <x-input-error :messages="$errors->get('adress')" class="mt-2" />

            <x-input-label for="woonplaats" :value="__('Woonplaats')" />
            <x-text-input id="woonplaats" class="block mt-1 w-full" type="text" name="woonplaats" :value="old('woonplaats')" required  /> 
            <x-input-error :messages="$errors->get('woonplaats')" class="mt-2" />
            
            <x-input-label for="geboortedatum" :value="__('Geboortedatum')" />
            <x-text-input id="geboortedatum" class="block mt-1 w-full" type="date" name="geboortedatum" :value="old('geboortedatum')" required  /> 
            <x-input-error :messages="$errors->get('geboortedatum')" class="mt-2" />

            <x-input-label for="geslacht" :value="__('Geslacht')" />
            <select id="geslacht" name="geslacht" :value="old('geslacht')" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <option selected></option>
                <option value="man">Man</option>
                <option value="vrouw">Vrouw</option>
                <option value="gendernutraal">Gendernutraal</option>
            </select>
            <x-input-error :messages="$errors->get('geslacht')" class="mt-2" />
            
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <div class="mt-4 space-x-2">
                <x-primary-button type="submit">{{ __('Save') }}</x-primary-button>
                <a href="{{ route('/') }}">{{ __('Cancel') }}</a>
            </div>
            
        </form>

    </div>
    
</x-guest-layout>