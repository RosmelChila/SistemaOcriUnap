<x-app-layout>
    <div class="container grid gap-4 mx-auto px-6">
        <div class="flex justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
              </svg>
              <span class="px-5">Convenios nacionales</span>
        </div>
    </div>

    <div class="container grid sm:grid-cols-6 gap-4 p-4 ">
                <div class="min-w-0-4 bg-white rounded-lg shadow-xs dark:bg-gray-900 py-4">
                    <span class="px-5 text-center">Regiones</span>
                    <span class="px-5 text-center text-sky-200">--------------- ></span>
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            {{-- <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class=""></th>
                            </tr> --}}
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">

                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 flex justify-center">
                                    <a href="" class="hover:bg-gray-800 py-1 px-10 rounded-full"><p class="font-semibold">PERU</p></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                {{-- para las tablas --}}
                <div class="container grid px-6 mx-auto col-span-5 ">
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="table-fixed ">
                                <thead>
                                    <tr
                                        class=" text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-900">
                                        <th class="px-2 py-2">N°</th>
                                        <th class="px-2 py-2 w-1/3">TÍTULO</th>
                                        <th class="px-2 py-2 w-1/5">RESOLUCIÓN</th>
                                        <th class="px-2 py-2 w-1/6">ESTADO</th>
                                        <th class="px-2 py-2 w-1/6">EXPIRACIÓN</th>
                                        <th class="px-2 py-2 w-1/6">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-2 py-2 text-xs">
                                            1
                                        </td>
                                        <td class="px-2 py-2 text-xs">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis officia excepturi saepe,
                                            delectus quis ipsam cum modi dicta neque laudantium sint optio laboriosam, dolor,
                                            eligendi quos minima dignissimos id earum.
                                        </td>
                                        <td class="px-2 py-2 text-xs">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde fugit hic tempora nobis
                                            quos magnam quaerat aliquid voluptas. Quas velit beatae incidunt nisi ut qui sint
                                            commodi possimus, praesentium aut.
                                        </td>
                                        <td class="px-2 py-2 text-xs">
                                            <div class="flex items-stretch px-10 ">
                                            <button class="px-3 py-1 rounded-md rounded-r-lg cursor-no-drop bg-indigo-500 shadow-lg shadow-indigo-500/50 text-gray-100">
                                                Por vencer
                                            </button></div>
                                        </td>
                                        <td class="px-3 py-3 text-xs">
                                            27/12/2300
                                        <td class="px-3 py-3">
                                            <div class="flex items-center space-x-4 text-sm">
                                                <button
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Edit">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Delete">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="w-5 h-5">
                                                        <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                                        <path fill-rule="evenodd"
                                                            d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- para paginación --}}
                        <div
                            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-900">
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

            </div>
        </div>
    </div>


</x-app-layout>

