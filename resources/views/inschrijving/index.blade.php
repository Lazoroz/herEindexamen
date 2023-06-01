<x-app-layout>

    <div class="mt-3 mx-2 min-h-5 overflow-hidden sm:rounded-lg bg-white shadow-sm rounded-lg">

        @foreach ($inschrijving as $m)

        <div class="p-6 space-x-2 max-w-s rounded shadow-lg">

          <div>
              <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Applicant Informatie</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Persoonlijke details.</p>

                @unless ($m->created_at->eq($m->updated_at))
                <small class="text-xl text-gray-600">{{ __( 'Laatst aangepast: ' .$m->updated_at) }}</small>
                @endunless
              </div>
              <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                  <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Volledige naam</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $m->naam }}</dd>
                  </div>
                  <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                      <dt class="text-sm font-medium leading-6 text-gray-900">Telefoonnummer</dt>
                      <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $m->telefoon }}</dd>
                    </div>
                  <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Adress </dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $m->adres. ' ' .$m->woonplaats }}</dd>
                  </div>
                  <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Geboortedatum</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $m->geboortedatum }}</dd>
                  </div>
                  <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                      <dt class="text-sm font-medium leading-6 text-gray-900">Geslacht</dt>
                      <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $m->geslacht }}</dd>
                    </div>
                  <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">E-mail</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $m->user->email }}</dd>
                  </div>

                  <form method="POST" action="{{ route('inschrijving.destroy', $m) }}">
                    @csrf
                    @method('delete')
                  <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <x-danger-button>Uitschrijven</x-primary-button>
                  </form>
                    <a href="{{ route('inschrijving.edit', $m) }}" 
                      class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase 
                      tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 
                      transition ease-in-out duration-150">Aanpassen</a>
                  </div>

                </dl>
            </div>
          </div>
        </div>

       

        @endforeach
    </div>

    <button class=""></button>
    
</x-app-layout>
