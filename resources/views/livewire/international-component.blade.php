<div>
    <div class="flex justify-start py-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM6.262 6.072a8.25 8.25 0 1010.562-.766 4.5 4.5 0 01-1.318 1.357L14.25 7.5l.165.33a.809.809 0 01-1.086 1.085l-.604-.302a1.125 1.125 0 00-1.298.21l-.132.131c-.439.44-.439 1.152 0 1.591l.296.296c.256.257.622.374.98.314l1.17-.195c.323-.054.654.036.905.245l1.33 1.108c.32.267.46.694.358 1.1a8.7 8.7 0 01-2.288 4.04l-.723.724a1.125 1.125 0 01-1.298.21l-.153-.076a1.125 1.125 0 01-.622-1.006v-1.089c0-.298-.119-.585-.33-.796l-1.347-1.347a1.125 1.125 0 01-.21-1.298L9.75 12l-1.64-1.64a6 6 0 01-1.676-3.257l-.172-1.03z" clip-rule="evenodd" />
          </svg>
          <span class="px-5 text-sm">CONVENIOS INTERNACIONALES</span>
    </div>
<div class="grid grid-rows gap-4 md:gap-4 md:grid-cols-5 ">
    <div class="col-span-1 ">
        <aside class="rounded-lg bg-dark-eval-1" aria-label="Sidebar">
            <div class="overflow-y-auto py-4 px-3 bg-zinc-50 dark:bg-zinc-900 rounded-lg grid justify-center shadow-lg">
                {{-- esta lista es para filtro de paises --}}
                <ul class="space-y-2">
                    @foreach ($countries as $country)
                    <li class="">
                        <button wire:click.prevent="countries('{{$country->name}}')"
                            class="flex items-center p-2 text-base font-normal text-zinc-500 rounded-lg dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-sky-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path
                                    d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
                                <path
                                    d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
                            </svg>
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
                        <tbody class="bg-white divide-y dark:divide-zinc-700 dark:bg-zinc-900">
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
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-zinc-400 focus:outline-none focus:shadow-outline-zinc"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-zinc-400 focus:outline-none focus:shadow-outline-zinc"
                                            aria-label="Delete">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
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
