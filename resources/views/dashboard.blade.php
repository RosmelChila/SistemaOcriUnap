<x-app-layout>
    <div class="container grid p-6 mx-auto">
        <!-- cartas de convenio -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            {{-- total de convenios --}}
            <div class="flex items-center p-4 bg-white rounded-lg dark:bg-zinc-900 shadow-lg ">
                <div class=" p-3 mr-4 text-zinc-100 bg-indigo-500 rounded-lg ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                      </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-zinc-600 dark:text-zinc-400">
                        Total De Convenios
                    </p>
                    <p class="text-lg font-semibold text-zinc-700 dark:text-zinc-200">
                        {{$total}}
                        {{-- {{$total}} --}}
                    </p>
                    <p class="text-lg font-semibold text-zinc-700 dark:text-zinc-200">
                        {{-- {{$inicio->subscription}} --}}
                    </p>
                </div>
            </div>
            {{-- convenios internacionales --}}
            <div class="flex items-center p-4 bg-white rounded-lg  dark:bg-zinc-900 shadow-lg ">
                <div class=" p-3 mr-4 text-zinc-100 bg-cyan-500 rounded-lg ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                      </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-zinc-600 dark:text-zinc-400">
                        Convenios Internacionales
                    </p>
                    <p class="text-lg font-semibold text-zinc-700 dark:text-zinc-200">
                        {{$international}}
                        {{-- {{$international}} --}}
                    </p>
                    <p class="text-lg font-semibold text-zinc-700 dark:text-zinc-200">
                        {{-- {{$fin->subscription}} --}}
                    </p>
                </div>
            </div>
            {{-- convenios nacionales --}}
            <div class="flex items-center p-4 bg-white rounded-lg dark:bg-zinc-900 shadow-lg ">
                <div class=" p-3 mr-4 text-zinc-100 bg-orange-500 rounded-lg ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-10 h-10">
                    <path fill-rule="evenodd"
                        d="M3 2.25a.75.75 0 01.75.75v.54l1.838-.46a9.75 9.75 0 016.725.738l.108.054a8.25 8.25 0 005.58.652l3.109-.732a.75.75 0 01.917.81 47.784 47.784 0 00.005 10.337.75.75 0 01-.574.812l-3.114.733a9.75 9.75 0 01-6.594-.77l-.108-.054a8.25 8.25 0 00-5.69-.625l-2.202.55V21a.75.75 0 01-1.5 0V3A.75.75 0 013 2.25z"
                        clip-rule="evenodd" />
                </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-zinc-600 dark:text-zinc-400">
                        Convenios Nacionales
                    </p>
                    <p class="text-lg font-semibold text-zinc-700 dark:text-zinc-200">
                        {{$national}}
                        {{-- {{ $national }} --}}
                    </p>
                </div>
            </div>
            {{-- convenios locales --}}
            <div class="flex items-center p-4 bg-white rounded-lg dark:bg-zinc-900 shadow-lg ">
                <div class=" p-3 mr-4 text-zinc-100 bg-green-500 rounded-lg ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-10 h-10">
                    <path
                        d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z" />
                    <path fill-rule="evenodd"
                        d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z"
                        clip-rule="evenodd" />
                    <path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" />
                </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-zinc-600 dark:text-zinc-400">
                        Convenios Locales
                    </p>
                    <p class="text-lg font-semibold text-zinc-700 dark:text-zinc-200">
                        {{$local}}
                        {{-- {{ $local }} --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @livewire('dash-component')
</x-app-layout>
