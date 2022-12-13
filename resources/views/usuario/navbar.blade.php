    <nav x-data="accordion(6)"
        class="fixed top-0 z-40 flex flex-wrap items-center justify-between w-full px-4 py-5 tracking-wide shadow-md bg-white dark:bg-zinc-900 md:px-8 md:py-2  lg:px-14">
        <!-- Left nav -->
        <div class="flex items-center">
            <img src="https://ocri.unap.edu.pe/sites/default/files/OCRI%20copia%203%20%281%29.png" alt=""
                class="h-10">
        </div>

        <div @click="handleClick()" x-data="{ open: false }"
            class="block text-zinc-900 dark:text-zinc-100 cursor-pointer lg:hidden">

            <svg x-show="! open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M2.25 4.5A.75.75 0 013 3.75h14.25a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75zm0 4.5A.75.75 0 013 8.25h9.75a.75.75 0 010 1.5H3A.75.75 0 012.25 9zm15-.75A.75.75 0 0118 9v10.19l2.47-2.47a.75.75 0 111.06 1.06l-3.75 3.75a.75.75 0 01-1.06 0l-3.75-3.75a.75.75 0 111.06-1.06l2.47 2.47V9a.75.75 0 01.75-.75zm-15 5.25a.75.75 0 01.75-.75h9.75a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75z"
                    clip-rule="evenodd" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M2.25 4.5A.75.75 0 013 3.75h14.25a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75zm14.47 3.97a.75.75 0 011.06 0l3.75 3.75a.75.75 0 11-1.06 1.06L18 10.81V21a.75.75 0 01-1.5 0V10.81l-2.47 2.47a.75.75 0 11-1.06-1.06l3.75-3.75zM2.25 9A.75.75 0 013 8.25h9.75a.75.75 0 010 1.5H3A.75.75 0 012.25 9zm0 4.5a.75.75 0 01.75-.75h5.25a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75z"
                    clip-rule="evenodd" />
            </svg>
            </button>

        </div>

        <div x-ref="tab" :style="handleToggle()"
            class="relative w-full overflow-hidden transition-all duration-700 lg:hidden max-h-0">
            <div class="flex flex-col my-3 space-y-2 text-sm hover:font-b text-zinc-600 dark:text-zinc-100">
                <a href="#" class="hover:text-zinc-900 dark:hover:text-zinc-400"><span>Inicio</span></a>
                <a href="{{ route('resultado') }}" class="hover:text-zinc-900 dark:hover:text-zinc-400"><span>Convenio</span></a>
                <a href="#" class="hover:text-zinc-900 dark:hover:text-zinc-400"><span>Contacto</span></a>
            </div>
            <div>
                <a href="#"
                    class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-zinc-600 hover:bg-zinc-700">
                    admin
                </a>
            </div>
        </div>
        <!-- End toggle menu -->
        <!-- End show menu sm,md -->

        <!-- Show Menu lg -->
        <div class="hidden w-full lg:flex lg:items-center lg:w-auto">
            <div
                class="items-center flex-1 pt-6 justify-center text-sm text-zinc-900 dark:text-zinc-100 lg:pt-0 list-reset lg:flex">
                <div class="mr-3">
                    <a href="{{ route('inicio') }}"
                        class="inline-block px-4 py-2 no-underline hover:text-zinc-900 dark:hover:text-zinc-400 text-zinc-600 dark:text-zinc-100">
                        Inicio
                    </a>
                </div>

                {{-- <!-- Dropdown 1 -->
                <div x-data="{ open: false }" @mouseleave="open = false" class="relative inline-block"
                    :class="{ 'text-zinc-900 dark:text-zinc-400': open, 'text-zinc-600 dark:text-zinc-100': !open }">
                    <!-- Dropdown Toggle Button -->
                    <button @mouseover="open = true" class="flex items-center p-2 rounded-md">
                        <span class="mr-4">Ver Convenios</span>
                        <span :class="open = !open ? '' : '-rotate-180'"
                            class="transition-transform duration-500 transform">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </button>
                    <!-- End Dropdown Toggle Button -->

                    <!-- Dropdown Menu -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        class="absolute right-0 py-1 text-zinc-500 bg-white rounded-lg shadow-xl min-w-max">
                        <a href="#" class="block px-4 py-1 hover:text-zinc-900 hover:bg-zinc-100">Convenios
                            Locales</a>
                        <a href="#" class="block px-4 py-1 hover:text-zinc-900 hover:bg-zinc-100">Convenios
                            Nacionales</a>
                        <a href="#" class="block px-4 py-1 hover:text-zinc-900 hover:bg-zinc-100">Convenios
                            Internacionales</a>
                    </div>
                    <!-- End Dropdown Menu -->
                </div>
                <!-- End Dropdown 1 --> --}}
                <div class="mr-3">
                    <a href="{{ route('resultado') }}"
                        class="inline-block px-4 py-2 no-underline hover:text-zinc-900 dark:hover:text-zinc-400 text-zinc-600 dark:text-zinc-100">
                        Convenio
                    </a>
                </div>
                <div class="mr-3">
                    <a href="{{ route('contacto') }}"
                        class="inline-block px-4 py-2 no-underline hover:text-zinc-900 dark:hover:text-zinc-400 text-zinc-600 dark:text-zinc-100">
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
                        <a href="{{ route('login') }}"><button
                                class="btn btn-primary btn-sm dark:btn-warning">Admin</button></a>
                    @endauth
                @endif
            </div>
            <div class="flex ">
                <button class="btn btn-circle btn-xs" srText=" Toggle dark mode" @click="toggleTheme">
                    <svg x-show="!isDarkMode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z"
                            clip-rule="evenodd" />
                    </svg>
                    <svg x-show="isDarkMode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-5 h-5">
                        <path
                            d="M20.798 11.012l-3.188 3.416L9.462 6.28l4.24-4.542a.75.75 0 011.272.71L12.982 9.75h7.268a.75.75 0 01.548 1.262zM3.202 12.988L6.39 9.572l8.148 8.148-4.24 4.542a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262zM3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18z" />
                    </svg>
                </button>
                <button type="btn" iconOnly variant="secondary" srText="Toggle dark mode" @click="toggleTheme">
            </div>
        </div>
        <!-- End show Menu lg -->
        <!-- End right nav -->

    </nav>

    <div>
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
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
        //  end faq
    </script>
