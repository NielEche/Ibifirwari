<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Committed to the development of sustainable creative futures powered by culture through developing and managing creative people, projects and ideas.">
        <title>Ibifiriwari</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Favicon -->
        <link rel="icon" href="https://res.cloudinary.com/nieleche/image/upload/v1706619116/IBIFIBGWHITE_wcgwlk.png" type="image/x-icon">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-black">
        <x-banner />

        <div class="min-h-screen bg-black dark:bg-black">
         

            <!-- Page Heading -->
            @if (isset($header))
                @if(request()->is('dashboard'))
                    @include('navigation-menu')
                @endif
                @include('partials.header')
            @endif


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            @if (isset($header))
                @include('partials.footer')
            @endif
        </div>

        @stack('modals')

        @livewireScripts

    </body>
</html>
