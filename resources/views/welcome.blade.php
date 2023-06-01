<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
            #mydiv {
                background: url('https://library.sportingnews.com/styles/twitter_card_120x120/s3/2021-08/french-open-roland-garros-052721-getty-ftrjpeg_1a1pohw6620e0104pndk7zjj90.jpg?itok=xz5_Se2f');
                }
        </style>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @inject('carbon', 'Carbon\Carbon')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="h-full w-full bg-cover bg-fixed" style="background: url('https://library.sportingnews.com/styles/twitter_card_120x120/s3/2021-08/french-open-roland-garros-052721-getty-ftrjpeg_1a1pohw6620e0104pndk7zjj90.jpg?itok=xz5_Se2f');">

        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
              @if ($isTime == true || $count > 2 )      
              <a href="{{ route('register.create') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>         
              @endif
        </div>

        <div class="p-10 w-4/5">
                
            @if ($count > 3 )
            <p class="text-left ...">asffasfasfasfasfa</p>

            @elseif ($isTime == true )
            <p class="text-left ...">nee</p>
            
            @else
            <p class="text-left ...">Lorem ipsum dolor sit amet ...</p>
            @endif
        </div>

    </body>
</html>
