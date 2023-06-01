<x-app-layout>
<style>
  * {background: url('')}
</style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-2 min-h-5 overflow-hidden shadow-sm sm:rounded-lg">
              <table class="w-full text-sm text-left text-grey-700 dark:text-gray-400">
                <thead class="text-s text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                    <th scope="col" class="px-6 py-3">Naam</th>
                    <th scope="col" class="px-6 py-3">Telefoonnummer</th>
                    <th scope="col" class="px-6 py-3">Adres</th>
                    <th scope="col" class="px-6 py-3">Woonplaats</th>
                    <th scope="col" class="px-6 py-3">Geboortedatum</th>
                    <th scope="col" class="px-6 py-3">Geslacht</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                  </tr>
                </thead>
                <tbody>
    
                  @foreach ($inschrijving as $i)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th cope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $i->naam }}</th>
                    <td class="px-6 py-4">{{ $i->telefoon }}</td>
                    <td class="px-6 py-4">{{ $i->adres }}</td>
                    <td class="px-6 py-4">{{ $i->woonplaats }}</td>
                    <td class="px-6 py-4">{{ $i->geboortedatum }}</td>
                    <td class="px-6 py-4">{{ $i->geslacht }}</td>
                    <td class="px-6 py-4">{{ $i->user->email }}</td>
                  </tr>
                      
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>

</x-app-layout>
