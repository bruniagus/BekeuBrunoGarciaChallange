<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ __('Car_Discounts') }} - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        @livewireStyles
    </head>
    <body class="bg-gray-100">


        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center  text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        @stack('scripts')
    </body>



</html>