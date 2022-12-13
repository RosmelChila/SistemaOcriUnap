<nav aria-label="secondary" x-data="{ open: false }"
    class="sticky top-0 z-10 flex items-center justify-between px-4 py-2 sm:px-4 transition-transform duration-500 bg-white dark:bg-zinc-900"
    :class="{
        '-tranzinc-y-full': scrollingDown,
        'tranzinc-y-0': scrollingUp,
    }">



    <div class="flex items-center gap-4">

        <x-button type="button" class="md:hidden" iconOnly variant="secondary" srText="Toggle dark mode"
            @click="toggleTheme">
            <x-heroicon-o-moon x-show="!isDarkMode" aria-hidden="true" class="w-6 h-6" />
            <x-heroicon-o-sun x-show="isDarkMode" aria-hidden="true" class="w-6 h-6" />
        </x-button>
    </div>
    {{-- para el busacador --}}
    {{-- @livewire('searchb-component') --}}
    <div class="flex items-center gap-5">
        <x-button type="" class="" iconOnly variant="" srText="" @click="toggleTheme">
            <x-heroicon-o-moon x-show="!isDarkMode" aria-hidden="true" class="w-6 h-6" />
            <x-heroicon-o-sun x-show="isDarkMode" aria-hidden="true" class="w-6 h-6" />
        </x-button>

        <div class="dropdown dropdown-end">
            <label tabindex="0" class="cursor-pointer indicator-item">
                <div class="indicator">
                    @if(Auth::user()->unreadNotifications->count()!= 0)
                    <span class="indicator-item badge badge-primary">{{Auth::user()->unreadNotifications->count()}}</span>
                    @endif
                    <div class="grid w-7 h-7  place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 hover:text-sky-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </div>
                </div></label>

            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-zinc-100 dark:bg-zinc-900 rounded-lg w-52">
                @forelse (Auth::user()->Notifications as $notification)
                    <li><a href="{{ route('ver.id', $notification->data['id']) }}">Un convenio esta
                            {{ $notification->data['status'] }}</a></li>
                @empty
                    <span class="p-2 text-sm">No hay Notificaciones</span>
                @endforelse
            </ul>

        </div>

        {{-- para notificaciones con bolita arriba --}}
        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
            <x-dropdown align="right" width="60">
                <x-slot name="trigger">
                    <button type="button"
                        class="inline-flex items-center rounded-md p-2 text-sm font-medium text-zinc-500 transition duration-150 ease-in-out hover:text-zinc-700 focus:outline-none focus:ring focus:ring-sky-500 focus:ring-offset-1 focus:ring-offset-white dark:text-zinc-400 dark:hover:text-zinc-200">
                        {{ Auth::user()->currentTeam->name }}

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <div class="w-60">
                        <!-- Team Management -->
                        <div class="block px-4 py-2 text-xs text-zinc-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                            {{ __('Team Settings') }}
                        </x-dropdown-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-dropdown-link href="{{ route('teams.create') }}">
                                {{ __('Create New Team') }}
                            </x-dropdown-link>
                        @endcan

                        <div class="border-t border-zinc-100 dark:border-zinc-700"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-zinc-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" />
                        @endforeach
                    </div>
                </x-slot>
            </x-dropdown>
        @endif

        <!-- Settings Dropdown -->
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <button
                        class="flex text-sm border-2 border-transparent rounded-md transition focus:outline-none focus:ring focus:ring-sky-500 focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark-eval-1">
                        <img class="h-8 w-8 rounded-md object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </button>
                @else
                    <button
                        class="flex items-center p-2 rounded-md text-sm font-medium text-zinc-500 transition duration-150 ease-in-out hover:text-zinc-700 focus:outline-none focus:ring focus:ring-sky-500 focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark-eval-1 dark:text-zinc-400 dark:hover:text-zinc-200">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                @endif
            </x-slot>

            <x-slot name="content">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-zinc-400">
                    {{ __('Administrar cuenta') }}
                </div>

                <x-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Perfil') }}
                </x-dropdown-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                        {{ __('API Tokens') }}
                    </x-dropdown-link>
                @endif

                <div class="border-t border-zinc-100 dark:border-zinc-700"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Salir') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</nav>
