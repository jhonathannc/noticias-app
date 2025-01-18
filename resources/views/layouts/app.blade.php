<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
    </head>
    <body class="font-sans antialiased bg-gray-50 text-black">
        <div class="relative min-h-screen flex flex-col items-center">
            <div class="pb-5 w-full flex flex-col items-center">
                <x-header />
              
                <main class="mt-6 flex flex-col items-center lg:max-w-7xl">
                    @yield('body')
                </main>
              
                <x-footer/>
              </div>
        </div>


    </body>
</html>
