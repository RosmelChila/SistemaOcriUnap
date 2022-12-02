<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    {{-- Examples --}}
    <x-sidebar.link title="Usuarios" href="{{ route('usuarios') }}" :isActive="request()->routeIs('usuarios')">
        <x-slot name="icon">
            <x-icons.usuarios class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="Filtrar" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-icons.mundo class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Internacional" href="{{ route('internacional') }}"
            :active="request()->routeIs('internacional')" />
        <x-sidebar.sublink title="Nacional" href="{{ route('nacional') }}"
            :active="request()->routeIs('nacional')" />
        <x-sidebar.sublink title="Local" href="{{ route('local') }}"
            :active="request()->routeIs('local')" />
    </x-sidebar.dropdown>
    {{-- para documentos --}}
    <x-sidebar.dropdown title="Convenios" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-icons.conve class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Agregar" href="{{ route('agregar') }}"
            :active="request()->routeIs('agregar')" />
        <x-sidebar.sublink title="Reporte" href="{{ route('reporte') }}"
            :active="request()->routeIs('reporte')" />
    </x-sidebar.dropdown>

    {{-- para usuarios --}}
    <x-sidebar.link title="Soporte" href="{{ route('soporte') }}" :isActive="request()->routeIs('soporte')">
        <x-slot name="icon">
            <x-icons.help class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

</x-perfect-scrollbar>
