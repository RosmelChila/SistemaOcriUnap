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
{{-- <body class="antialiased bg-zinc-50 dark:bg-zinc-900">
<button x-data @click="$store.darkMode.toggle()" type="button">
 encender
</button>
<div>fvsv  </div>
<div>fvsv  </div>
<div>fvsv  </div>
<div>fvsv  </div>
<div>fvsv  </div>
<div>fvsv  </div>
<div>fvsv  </div>
<div>fvsv  </div>
<div>fvsv  </div>

</body>

<script>
    document.addEventListener('alpine:init',()=>{
        Alpine.store('darkMode',{
            on: Alpine.$persist(false).as('darkMode_on'),
            toggle(){
                this.on = ! this.on
            }
        })
    })
</script> --}}

<body class="antialiased">
    <div class="flex flex-col min-h-screen font-roboto dark:bg-zinc-900">
        {{-- cabezera --}}
        <header
            class="bg-white border-b dark:bg-zinc-900 dark:border-zinc-700 xl:fixed xl:w-full xl:top-0 xl:left-0 xl:z-30">
            <div
                class="container px-4 py-5 mx-auto space-y-4 xl:space-y-0 xl:flex xl:items-center xl:justify-between xl:space-x-10">
                <div class="flex justify-between"><a href="/" class="text-zinc-800 dark:text-zinc-200">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M11.644 1.59a.75.75 0 01.712 0l9.75 5.25a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.712 0l-9.75-5.25a.75.75 0 010-1.32l9.75-5.25z"
                                    fill="#0ED3CF" />
                                <path
                                    d="M3.265 10.602l7.668 4.129a2.25 2.25 0 002.134 0l7.668-4.13 1.37.739a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.71 0l-9.75-5.25a.75.75 0 010-1.32l1.37-.738z"
                                    fill="#0ED3CF" />
                                <path
                                    d="M10.933 19.231l-7.668-4.13-1.37.739a.75.75 0 000 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 000-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 01-2.134-.001z"
                                    fill="#0ED3CF" />
                            </svg>
                            <p class="ml-2 text-lg 2xl:text-xl">Sistema<strong>Convenios</strong></p>
                        </div>
                    </a>
                    <div class="flex items-center space-x-2 xl:hidden"><button
                            class="p-1 rounded-md hover:bg-zinc-100 dark:hover:bg-zinc-800 focus:bg-zinc-100 dark:focus:bg-zinc-800 focus:outline-none"><svg
                                viewBox="0 0 20 20" fill="currentColor"
                                class="w-6 h-6 text-zinc-700 dark:text-zinc-300">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg></button></div>
                </div>

                <div class="flex flex-col space-y-4 xl:space-y-0 xl:flex-row xl:items-center xl:space-x-3"><a
                        href="/blog"
                        class="text-zinc-500 dark:text-zinc-200 hover:text-zinc-800 dark:hover:text-zinc-400 mr-4 2xl:text-base xl:text-sm relative transition-colors duration-300"><span></span>
                        <span class="w-[7px] absolute -right-2 -top-1 h-[7px] rounded-full bg-primary"></span></a> <a
                        href="/submit-component"
                        class="flex items-center justify-center h-12 px-5 text-sm font-medium text-center text-white transition-colors duration-300 transform rounded-lg xl:h-10 bg-primary hover:bg-primary/70">
                        Soporte
                    </a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="flex items-center justify-center h-12 px-4 mt-2 text-sm text-center text-zinc-600 transition-colors duration-300 transform border rounded-lg xl:h-10 dark:text-zinc-300 dark:border-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-700 focus:outline-none">
                                Iniciado
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="flex items-center justify-center h-12 px-4 mt-2 text-sm text-center text-zinc-600 transition-colors duration-300 transform border rounded-lg xl:h-10 dark:text-zinc-300 dark:border-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-700 focus:outline-none">
                                Administrador
                            </a>
                            {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-zinc-700 dark:text-zinc-500 underline">Register</a>
                        @endif --}}
                        @endauth
                    @endif
                    <button type="button" aria-label="Color Mode"
                        class="flex justify-center p-2 text-zinc-500 transition duration-150 ease-in-out bg-zinc-100 border border-transparent rounded-md lg:bg-white lg:dark:bg-zinc-900 dark:text-zinc-200 dark:bg-zinc-800 hover:bg-zinc-50 dark:hover:bg-zinc-700 hover:text-zinc-700 focus:outline-none focus:bg-zinc-50 dark:focus:bg-zinc-700 active:bg-zinc-50"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <!---->
                    </button>

                </div>
            </div>
    </div>
    <main>

    </main>
    </header>
    {{-- para footer --}}
    <div class="bg-zinc-100 dark:bg-zinc-800">
        <div
            class="container flex flex-col items-center px-4 py-6 mx-auto space-y-6 lg:space-y-0 lg:flex-row lg:justify-between">
            <div class="w-48 text-zinc-700 dark:text-zinc-200">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M11.644 1.59a.75.75 0 01.712 0l9.75 5.25a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.712 0l-9.75-5.25a.75.75 0 010-1.32l9.75-5.25z"
                            fill="#0ED3CF" />
                        <path
                            d="M3.265 10.602l7.668 4.129a2.25 2.25 0 002.134 0l7.668-4.13 1.37.739a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.71 0l-9.75-5.25a.75.75 0 010-1.32l1.37-.738z"
                            fill="#0ED3CF" />
                        <path
                            d="M10.933 19.231l-7.668-4.13-1.37.739a.75.75 0 000 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 000-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 01-2.134-.001z"
                            fill="#0ED3CF" />
                    </svg>
                    <p class="ml-2 text-lg 2xl:text-xl">Sistema <strong>Convenios</strong></p>
                </div>
            </div>
            <p class="text-sm text-center text-zinc-500 dark:text-zinc-300">© 2022 Derechos reservados. Oficina de
                cooperacion y relaciones internacionales</p>
            <div class="flex items-center space-x-6"><a href="/privacy"
                    class="text-sm text-zinc-500 transition-colors duration-300 dark:text-zinc-300 hover:underline hover:text-primary dark:hover:text-primary">Privacidad</a>
                <a href="/legal"
                    class="text-sm text-zinc-500 transition-colors duration-300 dark:text-zinc-300 hover:underline hover:text-primary dark:hover:text-primary">Legal</a>
                <a href="/cookies"
                    class="text-sm text-zinc-500 transition-colors duration-300 dark:text-zinc-300 hover:underline hover:text-primary dark:hover:text-primary">Cookies</a>
                <a href="https://twitter.com/" target="_blink"
                    class="text-zinc-500 transition-colors duration-300 dark:text-zinc-300 hover:text-primary dark:hover:text-primary"><svg
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 fill-current">
                        <path
                            d="M19.995 6.68799C20.8914 6.15208 21.5622 5.30823 21.882 4.31399C21.0397 4.81379 20.118 5.16587 19.157 5.35499C17.8246 3.94552 15.7135 3.60251 14.0034 4.51764C12.2933 5.43277 11.4075 7.37948 11.841 9.26999C8.39062 9.09676 5.17598 7.4669 2.99702 4.78599C1.85986 6.74741 2.44097 9.25477 4.32502 10.516C3.64373 10.4941 2.97754 10.3096 2.38202 9.97799C2.38202 9.99599 2.38202 10.014 2.38202 10.032C2.38241 12.0751 3.82239 13.8351 5.82502 14.24C5.19308 14.4119 4.53022 14.4372 3.88702 14.314C4.45022 16.0613 6.06057 17.2583 7.89602 17.294C6.37585 18.4871 4.49849 19.1342 2.56602 19.131C2.22349 19.1315 1.88123 19.1118 1.54102 19.072C3.50341 20.333 5.78739 21.0023 8.12002 21C11.3653 21.0223 14.484 19.7429 16.7787 17.448C19.0734 15.1531 20.3526 12.0342 20.33 8.78899C20.33 8.60299 20.3257 8.41799 20.317 8.23399C21.1575 7.62659 21.8828 6.87414 22.459 6.01199C21.676 6.35905 20.8455 6.58691 19.995 6.68799Z">
                        </path>
                    </svg></a> <a href="https://github.com/" target="_blink"
                    class="text-zinc-500 transition-colors duration-300 dark:text-zinc-300 hover:text-primary dark:hover:text-primary"><svg
                        viewBox="0 0 30 30" class="w-6 h-6 fill-current">
                        <path
                            d="M15 1.875C7.75195 1.875 1.875 7.9043 1.875 15.334C1.875 21.2812 5.63672 26.3203 10.8516 28.1016C10.9247 28.1175 10.9994 28.1253 11.0742 28.125C11.5605 28.125 11.748 27.7676 11.748 27.457C11.748 27.1348 11.7363 26.291 11.7305 25.166C11.2963 25.2678 10.8522 25.3209 10.4062 25.3242C7.88086 25.3242 7.30664 23.3613 7.30664 23.3613C6.70898 21.8086 5.84766 21.3926 5.84766 21.3926C4.70508 20.5898 5.8418 20.5664 5.92969 20.5664H5.93555C7.25391 20.6836 7.94531 21.9609 7.94531 21.9609C8.60156 23.1094 9.48047 23.4316 10.2656 23.4316C10.7848 23.4213 11.2959 23.3015 11.7656 23.0801C11.8828 22.2129 12.2227 21.6211 12.5977 21.2812C9.68555 20.9414 6.62109 19.7871 6.62109 14.6309C6.62109 13.1602 7.13086 11.959 7.96875 11.0215C7.83398 10.6816 7.38281 9.31055 8.09766 7.45898C8.19354 7.43604 8.29209 7.42619 8.39062 7.42969C8.86523 7.42969 9.9375 7.61133 11.707 8.8418C13.8572 8.24022 16.1311 8.24022 18.2812 8.8418C20.0508 7.61133 21.123 7.42969 21.5977 7.42969C21.6962 7.42619 21.7947 7.43604 21.8906 7.45898C22.6055 9.31055 22.1543 10.6816 22.0195 11.0215C22.8574 11.9648 23.3672 13.166 23.3672 14.6309C23.3672 19.7988 20.2969 20.9355 17.373 21.2695C17.8418 21.6855 18.2637 22.5059 18.2637 23.7598C18.2637 25.5586 18.2461 27.0117 18.2461 27.4512C18.2461 27.7676 18.4277 28.125 18.9141 28.125C18.9928 28.1253 19.0713 28.1175 19.1484 28.1016C24.3691 26.3203 28.125 21.2754 28.125 15.334C28.125 7.9043 22.248 1.875 15 1.875Z">
                        </path>
                    </svg></a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
