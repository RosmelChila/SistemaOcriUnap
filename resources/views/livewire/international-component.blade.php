<div>
    <div class="flex justify-start py-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM6.262 6.072a8.25 8.25 0 1010.562-.766 4.5 4.5 0 01-1.318 1.357L14.25 7.5l.165.33a.809.809 0 01-1.086 1.085l-.604-.302a1.125 1.125 0 00-1.298.21l-.132.131c-.439.44-.439 1.152 0 1.591l.296.296c.256.257.622.374.98.314l1.17-.195c.323-.054.654.036.905.245l1.33 1.108c.32.267.46.694.358 1.1a8.7 8.7 0 01-2.288 4.04l-.723.724a1.125 1.125 0 01-1.298.21l-.153-.076a1.125 1.125 0 01-.622-1.006v-1.089c0-.298-.119-.585-.33-.796l-1.347-1.347a1.125 1.125 0 01-.21-1.298L9.75 12l-1.64-1.64a6 6 0 01-1.676-3.257l-.172-1.03z" clip-rule="evenodd" />
          </svg>
          <span class="px-5 text-xs">Convenios internacionales</span>
    </div>
<div class="grid grid-rows gap-4 md:gap-2 md:grid-cols-5 font-light">
    <div class="col-span-1 ">
        <aside class="rounded-lg bg-dark-eval-1" aria-label="Sidebar">
            <div class="overflow-y-auto py-4 px-3 bg-zinc-50 dark:bg-zinc-900 rounded-lg grid justify-center shadow-lg">
                {{-- esta lista es para filtro de paises --}}
                <ul class="space-y-2">
                    @foreach ($countries as $country)
                    <li class=" text-zinc-800 hover:text-cyan-500 dark:text-white hover:border-l-4 dark:hover:text-cyan-500">
                        <button wire:click.prevent="countries('{{$country->name}}')"
                            class="flex items-center p-1 text-sm font-light">
                            <span class="ml-1 text-center">{{$country->name}}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </aside>

    </div>
    <div class="col-span-4">
        <div class="container grid mx-auto ">
            <div class="w-full overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto ">
                    {{-- esta tabla es para el contenido --}}
                    <table class="table-fixed ">
                        <thead>
                            <tr
                                class=" text-xs font-semibold tracking-wide text-left text-zinc-500 uppercase border-b dark:border-zinc-700 bg-zinc-50 dark:text-zinc-400 dark:bg-zinc-900">
                                <th class="px-2 py-2 ">N°</th>
                                <th class="px-2 py-2 w-1/3 text-center">TÍTULO</th>
                                <th class="px-2 py-2 w-1/5 text-center">RESOLUCIÓN</th>
                                <th class="px-2 py-2 w-1/6 text-center">ESTADO</th>
                                <th class="px-2 py-2 w-1/6 text-center">EXPIRACIÓN</th>
                                <th class="px-2 py-2 w-1/6 text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:divide-zinc-700 dark:bg-zinc-900">
                             @php $i=1; @endphp
                             @foreach ($agreements as $agreement)
                            <tr class="text-zinc-700 dark:text-zinc-400">
                                <td class="px-2 py-2 text-xs">
                                    @php echo $i; @endphp
                                </td>
                                <td class="px-2 py-2 text-xs">
                                    {{$agreement->title}}
                                </td>
                                <td class="px-2 py-2 text-xs">
                                    {{$agreement->resolution}}
                                </td>
                                <td class="px-2 py-2 text-xs">
                                    {{-- Estados --}}
                                <?php
                                    if($agreement->status=='VIGENTE'){
                                ?>
                                        <div class="grid justify-items-center px-10 ">
                                            <span class="bg-green-600 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">vigente</span>

                                        </div>
                                <?php
                                    }
                                    if($agreement->status=='POR VENCER'){
                                ?>
                                        <div class="px-5 grid justify-items-center">
                                            <span class="bg-red-500 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">Por vencer</span>
                                        </div>
                                <?php
                                    }
                                    if($agreement->status=='VENCIDO'){
                                ?>
                                        <div class="grid justify-items-center px-10 ">
                                            <span class="bg-zinc-600 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">Vencido</span>
                                        </div>
                                <?php
                                    }
                                ?>
                                    {{-- Estados Fin --}}
                                </td>
                                <td class="px-3 py-3 text-xs text-center">
                                    {{$agreement->expiration}}
                                <td class="px-3 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <a href="{{route('editar.ide',$agreement->id)}}"
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-zinc-400 focus:outline-none focus:shadow-outline-zinc"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a target="_blank" href="{{route('descarga.path',$agreement->id)}}"
                                        {{-- wire:click="descargar('{{$agreement->path}}')" --}}

                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-zinc-400 focus:outline-none focus:shadow-outline-zinc"
                                            aria-label="Donwload">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path d="M10 2a.75.75 0 01.75.75v5.59l1.95-2.1a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0L6.2 7.26a.75.75 0 111.1-1.02l1.95 2.1V2.75A.75.75 0 0110 2z" />
                                                <path d="M5.273 4.5a1.25 1.25 0 00-1.205.918l-1.523 5.52c-.006.02-.01.041-.015.062H6a1 1 0 01.894.553l.448.894a1 1 0 00.894.553h3.438a1 1 0 00.86-.49l.606-1.02A1 1 0 0114 11h3.47a1.318 1.318 0 00-.015-.062l-1.523-5.52a1.25 1.25 0 00-1.205-.918h-.977a.75.75 0 010-1.5h.977a2.75 2.75 0 012.651 2.019l1.523 5.52c.066.239.099.485.099.732V15a2 2 0 01-2 2H3a2 2 0 01-2-2v-3.73c0-.246.033-.492.099-.73l1.523-5.521A2.75 2.75 0 015.273 3h.977a.75.75 0 010 1.5h-.977z" />
                                              </svg>
                                            </a>
                                        <a href="{{route('ver.id',$agreement->id)}}"
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-zinc-400 focus:outline-none focus:shadow-outline-zinc"
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
                            @php $i++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- para paginación --}}
                <div>
                    {{$agreements->links()}}
            </div>
        </div>
    </div>
</div>
</div>
