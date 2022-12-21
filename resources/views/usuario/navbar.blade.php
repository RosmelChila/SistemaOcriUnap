<!-- component -->
<div class="">
    <div class="antialiased dark:bg-zinc-900">
        <div class="w-full  bg-inicio text-zinc-200 dark:bg-zinc-900 font-light">
            <div x-data="{ open: true }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between p-4">
                    <a href="https://ocri.unap.edu.pe/">
                        <img src="/img/logo.png" alt="logo OCRI" class="h-11">
                    </a>
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

                    <div class="grid justify-center">
                        <label class="swap swap-rotate">

                            <!-- this hidden checkbox controls the state -->
                            <input type="checkbox" srText=" Toggle dark mode" @click="toggleTheme" />

                            <!-- moon icon -->
                            <svg class="swap-on fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                            </svg>

                            <!-- sun icon -->
                            <svg class="swap-off fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                            </svg>

                        </label>
                    </div>
                    {{-- <div class="grid grid-cols-1 md:grid-cols-1">
                        @if (Route::has('login'))
                            @auth
                                <a class=" flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:text-white dark:hover:text-white dark:text-zinc-200 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline"
                                    href="{{ route('login') }}">
                                    <div class=" text-white rounded-lg p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z"
                                                clip-rule="evenodd" />
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
                                    <div class=" text-white rounded-lg p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </div>
                                     <div class="ml-3">
                                        <p class="font-semibold">Administrador</p>
                                        <p class="text-sm">Acceder como administrador</p>
                                    </div>
                                </a>
                            @endauth
                        @endif
                    </div> --}}
                    {{-- <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:text-white dark:hover:text-white dark:text-zinc-200 md:mt-0 md:ml-4 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('inicio') }}">
                        </a> --}}

                    {{-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
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
                            class="absolute w-full md:w-screen mt-2 origin-top-right">
                            <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark:bg-zinc-800">
                                <div class="grid grid-cols-1 md:grid-cols-1">
                                    @if (Route::has('login'))
                                        @auth
                                            <a class=" flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:text-white dark:hover:text-white dark:text-zinc-200 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline"
                                                href="{{ route('login') }}">
                                                <div class="bg-teal-600 text-white rounded-lg p-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z"
                                                            clip-rule="evenodd" />
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                            clip-rule="evenodd" />
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
                    </div> --}}
                    {{-- <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:text-white dark:hover:text-white dark:text-zinc-200 md:mt-0 md:ml-4 hover:text-zinc-900 focus:text-zinc-900 hover:bg-zinc-200 focus:bg-zinc-200 focus:outline-none focus:shadow-outline"
                        href="{{ route('contacto') }}">Nosotros</a> --}}
                </nav>
            </div>
        </div>
    </div>
</div>
