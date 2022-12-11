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

    <div class="container grid grid-cols-2 gap-4 mx-auto px-6">
        <div class="flex justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path d="M16.881 4.346A23.112 23.112 0 018.25 6H7.5a5.25 5.25 0 00-.88 10.427 21.593 21.593 0 001.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.592.772-2.468a17.116 17.116 0 01-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0018 11.25c0-2.413-.393-4.735-1.119-6.904zM18.26 3.74a23.22 23.22 0 011.24 7.51 23.22 23.22 0 01-1.24 7.51c-.055.161-.111.322-.17.482a.75.75 0 101.409.516 24.555 24.555 0 001.415-6.43 2.992 2.992 0 00.836-2.078c0-.806-.319-1.54-.836-2.078a24.65 24.65 0 00-1.415-6.43.75.75 0 10-1.409.516c.059.16.116.321.17.483z" />
            </svg>
              <span class="px-5 text-sm">CONVENIOS POR VENCER</span>
        </div>
        {{-- <div class="mb-4 text-sm font-semibold text-zinc-400 dark:text-zinc-300 flex justify-start">Usuarios registrados</div> --}}

        <div class="flex justify-end my-2">
            <button class="shadow-lg btn btn-info btn-xs text-zinc-100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mx-2">
                <path d="M10 2a.75.75 0 01.75.75v5.59l1.95-2.1a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0L6.2 7.26a.75.75 0 111.1-1.02l1.95 2.1V2.75A.75.75 0 0110 2z" />
                <path d="M5.273 4.5a1.25 1.25 0 00-1.205.918l-1.523 5.52c-.006.02-.01.041-.015.062H6a1 1 0 01.894.553l.448.894a1 1 0 00.894.553h3.438a1 1 0 00.86-.49l.606-1.02A1 1 0 0114 11h3.47a1.318 1.318 0 00-.015-.062l-1.523-5.52a1.25 1.25 0 00-1.205-.918h-.977a.75.75 0 010-1.5h.977a2.75 2.75 0 012.651 2.019l1.523 5.52c.066.239.099.485.099.732V15a2 2 0 01-2 2H3a2 2 0 01-2-2v-3.73c0-.246.033-.492.099-.73l1.523-5.521A2.75 2.75 0 015.273 3h.977a.75.75 0 010 1.5h-.977z" />
              </svg>IMPRIMIR</button>

        </div>
    </div>

    <div class="container grid px-6 mx-auto shadow-lg bg-zinc-100 dark:bg-zinc-900 rounded-lg">
        <div class="w-full overflow-hidden">
            <div class="w-full overflow-x-auto">
                <table class="table-fixed ">
                    <thead>
                        <tr
                            class=" text-xs font-semibold tracking-wide text-left text-zinc-500 uppercase border-b dark:border-zinc-700 bg-zinc-50 dark:text-zinc-400 dark:bg-zinc-900">
                            <th class="px-2 py-2">N°</th>
                            <th class="px-2 py-2 w-1/3 text-center">TÍTULO</th>
                            <th class="px-2 py-2 w-1/5 text-center">RESOLUCIÓN</th>
                            <th class="px-2 py-2 w-1/6 text-center">ESTADO</th>
                            <th class="px-2 py-2 w-1/6 text-center">EXPIRACIÓN</th>
                            <th class="px-2 py-2 w-1/6 text-center">VER CONVENIO</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-zinc-700 dark:bg-zinc-900">
                        @foreach ($expirate as $expire)
                        <tr class="text-zinc-700 dark:text-zinc-400">
                            <td class="px-2 py-2 text-xs">
                                1
                            </td>
                            <td class="px-2 py-2 text-xs">
                                {{$expire->title}}
                            </td>
                            <td class="px-2 py-2 text-xs">
                                {{$expire->resolution}}
                            </td>
                            <td class="px-2 py-2 text-xs">
                                <?php
                                if($expire->status=='VIGENTE'){
                            ?>
                                    <div class="grid justify-items-center px-10 ">
                                        <span class="bg-green-600 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">vigente</span>
                                    </div>
                            <?php
                                }
                                if($expire->status=='POR VENCER'){
                            ?>
                                    <div class="px-5 grid justify-items-center">
                                        <span class="bg-red-500 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">Por vencer</span>
                                    </div>
                            <?php
                                }
                                if($expire->status=='VENCIDO'){
                            ?>
                                     <div class="px-5 grid justify-items-center">
                                        <span class="bg-zinc-600 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">Vencido</span>
                                    </div>
                            <?php
                                }
                            ?>
                            </td>
                            <td class="px-3 py-3 text-xs text-center">
                                {{$expire->expiration}}
                            <td class="px-3 py-3 text-center grid justify-items-center">
                                <div class="space-x-4 text-sm">
                                    <a href="{{route('ver.id',$expire->id)}}"
                                        class="px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-zinc-400 focus:outline-none focus:shadow-outline-zinc"
                                        aria-label="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" class="w-5 h-5">
                                            <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                            <path fill-rule="evenodd"
                                                d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- para paginación --}}
            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-zinc-500 uppercase border-t dark:border-zinc-700 bg-zinc-50 sm:grid-cols-9 dark:text-zinc-400 dark:bg-zinc-900">
                <span class="flex items-center col-span-3">
                    Paginas 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        <ul class="inline-flex items-center">
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-sky"
                                    aria-label="Previous">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-sky">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-sky">
                                    2
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-sky-600 border border-r-0 border-sky-600 rounded-md focus:outline-none focus:shadow-outline-sky">
                                    3
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-sky">
                                    4
                                </button>
                            </li>
                            <li>
                                <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-sky"
                                    aria-label="Next">
                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                        <path
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </span>
            </div>
        </div>
    </div>



</x-app-layout>
