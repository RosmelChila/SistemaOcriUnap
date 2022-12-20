<!-- component -->
<div class="">
    <div class="antialiased bg-zinc-100 dark:bg-zinc-900">
        <div class="w-full text-zinc-700 bg-white dark:text-zinc-200 dark:bg-zinc-900 font-light">
            <div x-data="{ open: true }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between p-4">
                    <img src="/img/logo.png" alt="logo OCRI" class="h-9">

                    <a href="{{ route('inicio') }}"
                        class="text-lg font-semibold tracking-widest text-zinc-900 uppercase rounded-lg dark:text-white focus:outline-none focus:shadow-outline">Ocri<strong>una</strong></a>
                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:text-white dark:hover:text-white dark:text-zinc-200 md:mt-0 md:ml-4 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('inicio') }}">Inicio</a>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row text-zinc-900 dark:text-white bg-zinc-200 items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-zinc-600 dark:hover:bg-zinc-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline">
                            <span>Convenios</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right">
                            <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark:bg-zinc-800">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <a class=" flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:text-white dark:hover:text-white dark:text-zinc-200 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline"
                                        href="{{ route('resultado') }}">
                                        <div class="bg-teal-600 text-white rounded-lg p-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  ">
                                                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                                              </svg>

                                        </div>
                                        <div class="ml-3">
                                            <p class="font-semibold">Buscar convenios</p>
                                            <p class="text-sm">encuentre por el nombre de convenio</p>
                                        </div>
                                    </a>

                                    {{-- <a class=" flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:text-white dark:hover:text-white dark:text-zinc-200 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline" href="#">
                      <div class="bg-teal-600 text-white rounded-lg p-3">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                      </div>
                      <div class="ml-3">
                        <p class="font-semibold">Comments</p>
                        <p class="text-sm">Check your latest comments</p>
                      </div>
                    </a> --}}
                                    @if (Route::has('login'))
                                        @auth
                                            <a class=" flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:text-white dark:hover:text-white dark:text-zinc-200 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline"
                                                href="{{ route('login') }}">
                                    <div class="bg-teal-600 text-white rounded-lg p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd" />
                                          </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-semibold">Administrador</p>
                                        <p class="text-sm">Cuenta iniciada</p>
                                    </div>
                                    </a>
                                    @else
                                    <a class=" flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:text-white dark:hover:text-white dark:text-zinc-200 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline"
                                    href="{{ route('login') }}">
                        <div class="bg-teal-600 text-white rounded-lg p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                              </svg>

                        </div>
                        <div class="ml-3">
                            <p class="font-semibold">Administrador</p>
                            <p class="text-sm">Acceder como administrador</p>
                        </div>
                        </a>
                                @endauth
                        @endif
                                </div>
                            </div>

                        </div>
                    </div>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:text-white dark:hover:text-white dark:text-zinc-200 md:mt-0 md:ml-4 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('contacto') }}">Nosotros</a>

                    <div class="flex px-4 ">
                        <button class="text-zinc-800 dark:text-white" srText=" Toggle dark mode" @click="toggleTheme">
                            <svg x-show="!isDarkMode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg x-show="isDarkMode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-5 h-5">
                                <path
                                    d="M20.798 11.012l-3.188 3.416L9.462 6.28l4.24-4.542a.75.75 0 011.272.71L12.982 9.75h7.268a.75.75 0 01.548 1.262zM3.202 12.988L6.39 9.572l8.148 8.148-4.24 4.542a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262zM3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18z" />
                            </svg>
                        </button>
                        <button type="btn" iconOnly variant="secondary" srText="Toggle dark mode"
                            @click="toggleTheme">
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
