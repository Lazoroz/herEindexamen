<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Welkom</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=cormorant-garamond:500" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
    <section class="w-full h-screen bg transition-opacity">

            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">                   
                    <a href="{{ route('login') }}" class="font-cormorant text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    <a href="{{ route('/') }}">Inschrijven</a>
            </div>

        <img
          src="https://wallpaperaccess.com/full/1271276.jpg"
          class="w-full"
          alt="Image alt text"
        />
    </section>

    
</body>
</html>