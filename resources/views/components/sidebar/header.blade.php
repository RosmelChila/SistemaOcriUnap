<div class="flex items-center justify-between flex-shrink-0 px-3">
    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2">
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
        <p class="ml-2 text-lg 2xl:text-xl"><strong>OCRI</strong></p>
    </a>

    <!-- Toggle button -->
    <x-button type="button" iconOnly srText="Toggle sidebar" variant="secondary"
        x-show="isSidebarOpen || isSidebarHovered" @click="isSidebarOpen = !isSidebarOpen">
        <x-icons.menu-fold-right x-show="!isSidebarOpen" aria-hidden="true" class="hidden w-6 h-6 lg:block" />
        <x-icons.menu-fold-left x-show="isSidebarOpen" aria-hidden="true" class="hidden w-6 h-6 lg:block" />
        <x-heroicon-o-x aria-hidden="true" class="w-6 h-6 lg:hidden" />
    </x-button>
</div>
