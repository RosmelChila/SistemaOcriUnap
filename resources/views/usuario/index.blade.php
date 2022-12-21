

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
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet"
      />


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

<body class="text-gray-100 font-[Poppins]">

<div x-data="mainState" :class="{ dark: isDarkMode }" x-cloak>

   @include('usuario.navbar')

   @livewire('busqueda-component')

   <x-footer/>



</div>
</body>
</html>

{{--
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tailwind web</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
      rel="stylesheet"
    />

<script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="text-gray-100 font-[Poppins]">
    <nav class="fixed top-0 left-0 w-full py-6">
      <div class="container mx-auto flex justify-between">
        <img src="/img/package.png" class="h-8 animate-bounce" />
        <ul class="text-sm tracking-wide items-center flex gap-x-8">
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-400">
            <a class="cursor-pointer">Home</a>
          </li>
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-400">
            <a class="cursor-pointer">Product</a>
          </li>
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-400">
            <a class="cursor-pointer">About us</a>
          </li>
          <li class="hover:scale-125 duration-300 py-1 hover:text-teal-400">
            <a class="cursor-pointer">Contact</a>
          </li>
          <button
            class="bg-teal-600 px-7 rounded-full tracking-wide py-3 text-xs hover:scale-110 duration-300"
          >
            GET STARTED
          </button>
        </ul>
      </div>
    </nav>
    <section class="bg-[#23304c] h-screen flex px-[10%] py-[6%]">
      <img
        src="/img/Ellipse.png"
        class="z-20 animate-ping w-6 absolute left-24 top-56"
      />
      <img
        src="/img/Ellipse.png"
        class="z-20 animate-ping w-6 absolute right-96 top-36"
      />
      <img
        src="/img/Ellipse.png"
        class="z-20 animate-ping w-6 absolute left-64 bottom-24"
      />
      <img
        src="/img/Ellipse.png"
        class="z-20 animate-ping w-6 absolute right-40 top-64"
      />

      <img src="/img/wave3.png" class="absolute bottom-20 right-36 w-96" />
      <img
        src="/img/wave.png"
        class="absolute z-20 bottom-0 right-0 w-2/3"
      />
      <div class="flex-1">
        <img src="/img/loading.png" class="w-9/12" />
      </div>

      <div class="flex-1 pt-7">
        <div class="absolute">
          <h1 class="text-3xl leading-normal py-6">
            Build visual <br />
            tracking systems <br />
            for your
            <span class="underline decoration-teal-500">customers</span>
          </h1>
          <button
            class="bg-teal-600 px-7 rounded-full tracking-wide py-3 text-xs hover:scale-110 duration-300"
          >
            GET STARTED
          </button>
        </div>
      </div>
    </section>
  </body>
</html>
 --}}
