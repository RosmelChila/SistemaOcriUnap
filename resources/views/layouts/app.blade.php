<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OCRI') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }


            #container {
                background-color: red;
                width: 1000px;
                margin: 20px auto;
            }
            .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 200px;
            }
            .ck-content .image {
                /* block images */
                max-width: 80%;
                margin: 20px auto;
            }

    </style>

    @livewireStyles
    @stack('css')




    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-zinc-900 dark:text-zinc-200">

    <div x-data="mainState" :class="{ dark: isDarkMode }" @resize.window="handleWindowResize" x-cloak>
        <x-banner />

        <div class="min-h-screen text-zinc-900 bg-zinc-100 dark:bg-zinc-800 dark:text-zinc-200">
            <!-- Sidebar -->
            <x-sidebar.sidebar />

            <!-- Page Wrapper -->
            <div class="flex flex-col min-h-screen"
                :class="{
                    'lg:ml-64': isSidebarOpen,
                    'md:ml-16': !isSidebarOpen
                }"
                style="transition-property: margin; transition-duration: 150ms;">

                @livewire('navigation-menu')

                <x-mobile-bottom-nav />

                <!-- Page Heading -->
                @if (isset($header))
                    <header>
                        <div class="px-4 py-6 mx-auto max-w-7xl w-full sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main class="flex-1 p-4 mx-auto max-w-7xl w-full sm:p-6 lg:p-8">
                    {{ $slot }}
                </main>

                <!-- Page Footer -->
                <x-footer />
            </div>
        </div>
    </div>
    @stack('modals')

    @livewireScripts
    @stack('js')
    <script>
        Livewire.on('alert', function() {
            Swal.fire(
                'Agregado!',
                'correctamente',
                'success'
            )
        })
    </script>
</body>

</html>
