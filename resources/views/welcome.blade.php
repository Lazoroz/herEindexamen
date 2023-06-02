<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @inject('carbon', 'Carbon\Carbon')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body class=" h-full w-full bg-no-repeat bg-cover" style="background: url('https://library.sportingnews.com/styles/twitter_card_120x120/s3/2021-08/french-open-roland-garros-052721-getty-ftrjpeg_1a1pohw6620e0104pndk7zjj90.jpg?itok=xz5_Se2f') no-repeat; background-size: cover;" >

        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
              @if ( $EindDatum == false || $count > 3 )      
              <a href="{{ route('register.create') }}" class="ml-4 font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>         
              @endif
        </div>

        <div class="p-4 mt-80 ml-4 bg-white rounded-l shadow-md w-2/5 text-center">
            <p class=" text-xl text-left text-black">Welkom bij de site. <br> De GLR heeft tickets kunnen krjgen voor het tennistoernooi Roland Garrous in Parijs.</p>
            @if ($count > 3 )
            <p class="text-xl text-red-600 text-left"">De inschrijving zit nu vol. Sorry!</p>

            @elseif ($EindDatum == true )
            <p class="text-xl text-red-600 text-left">Datum verstreken. Je kan nu niet meer regristeren!</p>
            
            @else
            <p class="text-xl text-left">De inschrijvingen eindigt op 2 juni om 10:30. <br> Er zij alleen 20 tickets verkrijgbaar dus, wees snel!</p>
            @endif
        </div>

    </body>
</html>
