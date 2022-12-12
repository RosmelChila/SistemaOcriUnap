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
<body >
  <div x-data="mainState" :class="{dark: isDarkMode}" x-cloak>
    <nav x-data="accordion(6)" class="fixed top-0 z-40 flex flex-wrap items-center justify-between w-full px-4 py-5 tracking-wide shadow-md bg-white dark:bg-zinc-900 md:px-8 md:py-2  lg:px-14">
      <!-- Left nav -->
      <div class="flex items-center">
        <img src="https://ocri.unap.edu.pe/sites/default/files/OCRI%20copia%203%20%281%29.png" alt="" class="h-10">
      </div>
      <!-- End left nav -->

      <!-- Right nav -->
      <!-- Show menu sm,md -->
      <!-- Toggle button -->

      <div @click="handleClick()" x-data="{open : false}" class="block text-zinc-900 dark:text-zinc-100 cursor-pointer lg:hidden">

        <button @click="open = ! open" class="w-6 h-6 text-lg">
          <svg x-show="! open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd" d="M2.25 4.5A.75.75 0 013 3.75h14.25a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75zm0 4.5A.75.75 0 013 8.25h9.75a.75.75 0 010 1.5H3A.75.75 0 012.25 9zm15-.75A.75.75 0 0118 9v10.19l2.47-2.47a.75.75 0 111.06 1.06l-3.75 3.75a.75.75 0 01-1.06 0l-3.75-3.75a.75.75 0 111.06-1.06l2.47 2.47V9a.75.75 0 01.75-.75zm-15 5.25a.75.75 0 01.75-.75h9.75a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd" d="M2.25 4.5A.75.75 0 013 3.75h14.25a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75zm14.47 3.97a.75.75 0 011.06 0l3.75 3.75a.75.75 0 11-1.06 1.06L18 10.81V21a.75.75 0 01-1.5 0V10.81l-2.47 2.47a.75.75 0 11-1.06-1.06l3.75-3.75zM2.25 9A.75.75 0 013 8.25h9.75a.75.75 0 010 1.5H3A.75.75 0 012.25 9zm0 4.5a.75.75 0 01.75-.75h5.25a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
            </svg>
        </button>

      </div>
      <!-- End toggle button -->

      <!-- Toggle menu -->
      <div x-ref="tab" :style="handleToggle()" class="relative w-full overflow-hidden transition-all duration-700 lg:hidden max-h-0">
        <div class="flex flex-col my-3 space-y-2 text-sm hover:font-b text-zinc-600 dark:text-zinc-100">
          <a href="#" class="hover:text-zinc-900 dark:hover:text-zinc-400"><span>Inicio</span></a>
          <a href="#" class="hover:text-zinc-900 dark:hover:text-zinc-400"><span>Ver Convenios</span></a>
          <a href="#" class="hover:text-zinc-900 dark:hover:text-zinc-400"><span>Contacto</span></a>
        </div>
        <div>
          <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-zinc-600 hover:bg-zinc-700">
            admin
          </a>
        </div>
      </div>
      <!-- End toggle menu -->
      <!-- End show menu sm,md -->

      <!-- Show Menu lg -->
      <div class="hidden w-full lg:flex lg:items-center lg:w-auto">
        <div class="items-center flex-1 pt-6 justify-center text-sm text-zinc-900 dark:text-zinc-100 lg:pt-0 list-reset lg:flex">
          <div class="mr-3">
            <a href="#" class="inline-block px-4 py-2 no-underline hover:text-zinc-900 dark:hover:text-zinc-400 text-zinc-600 dark:text-zinc-100">
              Inicio
            </a>
          </div>

          <!-- Dropdown 1 -->
          <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block" :class="{'text-zinc-900 dark:text-zinc-400': open, 'text-zinc-600 dark:text-zinc-100': !open }">
            <!-- Dropdown Toggle Button -->
            <button @mouseover="open = true" class="flex items-center p-2 rounded-md">
              <span class="mr-4">Ver Convenios</span>
              <span :class="open = ! open ? '': '-rotate-180'" class="transition-transform duration-500 transform">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
              </span>
            </button>
            <!-- End Dropdown Toggle Button -->

            <!-- Dropdown Menu -->
            <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" class="absolute right-0 py-1 text-zinc-500 bg-white rounded-lg shadow-xl min-w-max">
              <a href="#" class="block px-4 py-1 hover:text-zinc-900 hover:bg-zinc-100">Convenios Locales</a>
              <a href="#" class="block px-4 py-1 hover:text-zinc-900 hover:bg-zinc-100">Convenios Nacionales</a>
              <a href="#" class="block px-4 py-1 hover:text-zinc-900 hover:bg-zinc-100">Convenios Internacionales</a>
            </div>
            <!-- End Dropdown Menu -->
          </div>
          <!-- End Dropdown 1 -->
          <div class="mr-3">
            <a href="#" class="inline-block px-4 py-2 no-underline hover:text-zinc-900 dark:hover:text-zinc-400 text-zinc-600 dark:text-zinc-100">
              Contacto
            </a>
          </div>
        </div>
      </div>


      <div class="hidden lg:flex lg:items-center  ">
        <div class="items-center flex-1 pt-6 justify-center text-lg text-zinc-500 lg:pt-0 list-reset lg:flex px-4">
          @if (Route::has('login'))

              @auth
                  <a href="{{ url('/dashboard') }}"><button class="btn btn-sm">Iniciado</button></a>
              @else
                  <a href="{{ route('login') }}"><button class="btn btn-accent btn-sm dark:btn-warning">Admin</button></a>
              @endauth

          @endif
        </div>
        <div class="flex ">
          <button  class="btn btn-circle btn-xs"  srText=" Toggle dark mode" @click="toggleTheme">
            <svg x-show="!isDarkMode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
            </svg>
            <svg x-show="isDarkMode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
              <path d="M20.798 11.012l-3.188 3.416L9.462 6.28l4.24-4.542a.75.75 0 011.272.71L12.982 9.75h7.268a.75.75 0 01.548 1.262zM3.202 12.988L6.39 9.572l8.148 8.148-4.24 4.542a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262zM3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18z" />
            </svg>
          </button>
          <button type="btn" iconOnly variant="secondary" srText="Toggle dark mode" @click="toggleTheme">
      </div>
      </div>
      <!-- End show Menu lg -->
      <!-- End right nav -->
    </nav>

    <div class="flex flex-col min-h-screen font-bunny bg-[url('https://radioondaazul.com/wp-content/uploads/2022/08/Universidad-Nacional-del-Altiplano-Puno.jpg')]" >

      <main class="flex-1 mt-20">
        {{-- solo esta parte para llamar los resultados --}}
        @livewire('busqueda-component')
      </main>

      {{-- para footer --}}
          <div class="bg-zinc-100 dark:bg-zinc-900">
              <div
                  class="container flex flex-col items-center px-4 py-6 mx-auto space-y-6 lg:space-y-0 lg:flex-row lg:justify-between">
                  <div class="w-48 text-zinc-700 dark:text-zinc-200">
                      <div class="flex items-center">
                          <img src="https://ocri.unap.edu.pe/sites/default/files/OCRI%20copia%203%20%281%29.png" alt="" class="h-10">
                          {{-- <p class="ml-2 text-lg 2xl:text-xl">Oficina de cooperación y relaciones internacionales <strong>Convenios</strong></p> --}}
                      </div>
                  </div>
                  <p class="text-sm text-center text-zinc-500 dark:text-zinc-300">© 2022 Derechos reservados. Oficina de
                      cooperacion y relaciones internacionales UNA - PUNO</p>
                  <div class="flex items-center space-x-6">
                      {{-- <a href="/privacy"
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
                          </svg></a> --}}
                  </div>
              </div>
          </div>

  </div>
</div>





  <script>
    // Faq
    document.addEventListener('alpine:init', () => {
      Alpine.store('accordion', {
        tab: 0
      });
      Alpine.data('accordion', (idx) => ({
        init() {
          this.idx = idx;
        },
        idx: -1,
        handleClick() {
          this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
          return this.$store.accordion.tab === this.idx ? '-rotate-180' : '';
        },
        handleToggle() {
          return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
      }));
    })
    //  end faq
  </script>
</body>


</html>
