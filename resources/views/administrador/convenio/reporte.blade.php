<x-app-layout>
    <div class="flex justify-start py-5">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
        </svg>
        <span class="px-5">Reporte de convenio</span>
    </div>


    <form method="GET" action="{{ route('consultar') }}">
        <div class="grid sm:grid-cols-1 w-full  gap-1 md:grid-cols-7 ">
            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm py-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100">
                    <span class="text-xs font-semibold tracking-wide grid justify-items-center">RESPONSABLE</span>
                    <div class="form-control px-2 grid justify-items-start">
                        @foreach ($responsibles as $id => $name)
                            <label class="cursor-pointer label">
                                <input type="checkbox" value="{{ $name }}"
                                    name="responsibles[]"{{ is_array(old('responsibles')) && in_array($id, old('responsibles')) ? 'checked' : '' }}
                                    class="checkbox checkbox-xs checkbox-warning" />
                                <span class="label-text px-2">{{ $name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm  py-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100">
                    <span class="text-xs font-semibold tracking-wide grid justify-items-center">LOCALIZACIÓN</span>
                    <div class="form-control px-2 grid justify-items-start">
                        <label class="cursor-pointer label">
                            <input type="checkbox" name="locations[]" value="INTERNACIONAL"
                                class="checkbox checkbox-xs checkbox-checkbox-info" />
                            <span class="label-text px-2 ">INTERNACIONAL</span>
                        </label>
                        <label class="cursor-pointer label">
                            <input type="checkbox" name="locations[]" value="NACIONAL"
                                class="checkbox checkbox-xs checkbox-checkbox-info" />
                            <span class="label-text px-2 ">NACIONAL</span>
                        </label>
                        <label class="cursor-pointer label">
                            <input type="checkbox" name="locations[]" value="LOCAL"
                                class="checkbox checkbox-xs checkbox-checkbox-info" />
                            <span class="label-text px-2 ">LOCAL</span>
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm py-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100">
                    <span class="text-xs font-semibold tracking-wide grid justify-items-center">PAIS</span>
                    <div class="form-control px-2 grid justify-items-start">
                        @foreach ($countries as $id => $name)
                            <label class="cursor-pointer label">
                                <input type="checkbox" name="countries[]" value="{{ $name }}"
                                    class="checkbox checkbox-xs checkbox-success" />
                                <span class="label-text px-2">{{ $name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm py-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100">
                    <span class="text-xs font-semibold tracking-wide grid justify-items-center">SECTOR</span>
                    <div class="form-control px-2 grid justify-items-start">
                        <label class="cursor-pointer label">
                            <input type="checkbox" name="sector[]" value="PUBLICO"
                                class="checkbox checkbox-xs checkbox-checkbox-info" />
                            <span class="label-text px-2  ">PUBLICO</span>
                        </label>
                        <label class="cursor-pointer label">
                            <input type="checkbox" name="sector[]" value="PRIVADO"
                                class="checkbox checkbox-xs checkbox-checkbox-info" />
                            <span class="label-text px-2">PRIVADO</span>
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <div
                    class=" h-full md:basis-1/3 max-w-sm py-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100">
                    <span class="text-xs font-semibold tracking-wide grid justify-items-center">COBERTURA</span>
                    <div class="form-control px-2 grid justify-items-start ">
                        @foreach ($coverages as $id => $name)
                            <label class="cursor-pointer label">
                                <input type="checkbox" name="coverage[]" value="{{ $name }}"
                                    class="checkbox checkbox-xs checkbox-accent" />
                                <span class="label-text px-2 ">{{ $name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm py-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100">
                    <span class="text-xs font-semibold tracking-wide grid justify-items-center">CONVENIO CON:</span>
                    <div class="form-control px-2 grid justify-items-start ">
                        @foreach ($organizations as $id => $name)
                            <label class="cursor-pointer label">
                                <input type="checkbox" name="organizations[]" value="{{ $name }}"
                                    class="checkbox checkbox-xs checkbox-secondary" />
                                <span class="label-text px-2 ">{{ $name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm py-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-center">
                    <span class="text-xs font-semibold tracking-wide">FECHAS</span>
                    <label class="input-group input-group-vertical">
                        <span class="text-sm mx-2 grid justify-items-center bg-gray-200 dark:bg-gray-800">desde</span>
                        <input type="date" name="date1"
                            class="input input-bordered input-xs mx-2 bg-gray-100 dark:bg-gray-900  " />
                    </label>
                    <label class="input-group input-group-vertical">
                        <span class="text-sm mx-2 grid justify-items-center bg-gray-200 dark:bg-gray-800">hasta</span>
                        <input type="date" name="date2"
                            class="input input-bordered input-xs mx-2 bg-gray-100 dark:bg-gray-900 " />
                    </label>
                </div>
            </div>
        </div>
        {{-- <div class="grid content-end my-5">
            <button class="justify-self-end btn btn-accent btn-sm dark:btn dark:btn-sm"
                type="submit">CONSULTAR</button>
        </div> --}}

        {{-- para visualizar el reporte solocuando apretas consultar --}}

        <div x-data="{ open: false }" class="grid content-end my-5">
            <button x-on:click="open = !open" class="justify-self-end btn btn-accent btn-sm dark:btn dark:btn-sm" type="submit">CONSULTAR</button>

            <div x-show="open" x-om:click.away="open = false" class="w-full overflow-x-auto">
                <table class="table-fixed ">
                    <thead>
                        <tr
                            class=" text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-900">
                            <th class="px-2 py-2">N°</th>
                            <th class="px-2 py-2 w-1/3 text-center">TÍTULO</th>
                            <th class="px-2 py-2 w-1/5 text-center">RESOLUCIÓN</th>
                            <th class="px-2 py-2 w-1/6 text-center">ESTADO</th>
                            <th class="px-2 py-2 w-1/6 text-center">EXPIRACIÓN</th>
                            <th class="px-2 py-2 w-1/6 text-center">VER CONVENIO</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-2 py-2 text-xs">
                                1
                            </td>
                            <td class="px-2 py-2 text-xs">
                                titulo
                            </td>
                            <td class="px-2 py-2 text-xs">
                                resolucion
                            </td>
                            <td class="px-2 py-2 text-xs">

                                <div class="grid justify-items-center px-10 ">
                                    <button
                                        class="px-3 py-1 rounded-md rounded-r-lg cursor-no-drop bg-green-500 shadow-lg shadow-green-500/50 text-gray-100">
                                        Activo
                                    </button>
                                </div>
                            </td>
                            <td class="px-3 py-3 text-xs text-center">
                                27/23/1312
                            <td class="px-3 py-3 text-center">
                                <div class="space-x-4 text-sm flex justify-center">
                                    <a href=""
                                        class="px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                        aria-label="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="w-5 h-5">
                                            <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                            <path fill-rule="evenodd"
                                                d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </form>

    <div class="">
        <div class="flex justify-end my-5">
            <button class="px-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="stroke-info flex-shrink-0 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </button>
            <span class="text-xs font-semibold tracking-wide grid content-center">Tipo de descarga</span>
        </div>
        <div class="flex justify-end my-5">
            <button class="mx-4 btn btn-accent btn-sm dark:btn dark:btn-sm">REPORTE ESTADISTICO</button>
            <button class=" btn btn-accent btn-sm dark:btn dark:btn-sm">REPORTE</button>
        </div>
    </div>

</x-app-layout>
