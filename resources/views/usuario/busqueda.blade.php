
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- <html x-data :class="$store.darkMode.on && 'dark'" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OCRI') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />



    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div x-data="mainState" :class="{ dark: isDarkMode }" x-cloak>
    @include('usuario.navbar')
    @livewire('busqueda-component')
   <x-footer/>

</div>
</body>
</html>





