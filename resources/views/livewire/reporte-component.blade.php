<div class="font-light">

    <div class="grid grid-cols-4 gap-1 py-1">
        <div
            class=" space-y-1 overflow-hidden rounded-lg shadow-md dark:bg-zinc-900 ">
            <span class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif py-1">FECHAS</span>
            <div class="flex">
            <label class="input-group input-group-vertical">
                <input wire:model.defer='inidate' type="date" name="date1"
                    class="input input-bordered input-xs mx-2 bg-zinc-100 dark:bg-zinc-900  " />
            </label>
            <span class="text-zinc-700 dark:text-zinc-400 text-xs"> a</span>
            <label class="input-group input-group-vertical">
                <input wire:model.defer='enddate' type="date" name="date2"
                    class="input input-bordered input-xs mx-2 bg-zinc-100 dark:bg-zinc-900 " />
            </label></div>
        </div>
        <div
        class=" space-y-1 overflow-hidden rounded-lg shadow-md dark:bg-zinc-900 ">
        <span class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif py-1">ESTADOS</span>
        <div class="flex justify-between">
            <label class="cursor-pointer label">
                <input wire:model.defer='status' type="checkbox" value="VIGENTE"
                    class="checkbox checkbox-xs checkbox-warning font-serif" />
                <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">VIGENTE</span>
            </label>
            <label class="cursor-pointer label">
                <input wire:model.defer='status' type="checkbox" value="POR VENCER"
                    class="checkbox checkbox-xs checkbox-warning font-serif" />
                <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">POR VENCER</span>
            </label>
            <label class="cursor-pointer label">
                <input wire:model.defer='status' type="checkbox" value="VENCIDO"
                    class="checkbox checkbox-xs checkbox-warning font-serif" />
                <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">VENCIDO</span>
            </label>

        </div>
    </div>
        <div class=" col-span-2">
            <div class="flex justify-end my-1">
                <button class="px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="stroke-info flex-shrink-0 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </button>
                <span class="text-xs font-semibold tracking-wide grid content-center">Tipo de descarga</span>
            </div>
            <div class="flex justify-end ">
                <button wire:click='genpdfest' class="mx-4 btn btn-info text-white btn-sm dark:btn-outline dark:btn-info">REPORTE ESTADISTICO</button>
                <input type="text" wire:model='title' placeholder="" class="input input-bordered input-sm bg-zinc-200 dark:bg-zinc-900 dark:input dark:input-sm text-xs">
                <button wire:click='genpdfcat' class=" btn btn-info text-white btn-sm dark:btn-outline dark:btn-info">REPORTE</button>
            </div>
        </div>
        <div class="">

        </div>
    </div>
        <div class="grid sm:grid-cols-1 w-full  gap-1 md:grid-cols-7 ">
                <div
                    class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
                    <span class="text-xs tracking-wide grid justify-items-center text-zinc-900 dark:text-zinc-100">RESPONSABLE</span>
                    <div class="form-control grid justify-items-start">
                        @foreach ($responsibles as $id => $name)
                            <label class="cursor-pointer label">
                                <input wire:model.defer='responsible' type="checkbox" value="{{ $name }}"
                                    class="checkbox checkbox-xs checkbox-warning font-serif" />
                                <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">{{ $name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
                    <span class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">LOCALIZACIÓN</span>
                    <div class="form-control grid justify-items-start">
                        <label class="cursor-pointer label">
                            <input wire:model.defer='location' type="checkbox" name="locations[]" value="INTERNACIONAL"
                                class="checkbox checkbox-xs checkbox-info" />
                            <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">INTERNACIONAL</span>
                        </label>
                        <label class="cursor-pointer label">
                            <input wire:model.defer='location' type="checkbox" name="locations[]" value="NACIONAL"
                                class="checkbox checkbox-xs checkbox-info" />
                            <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">NACIONAL</span>
                        </label>
                        <label class="cursor-pointer label">
                            <input wire:model.defer='location' type="checkbox" name="locations[]" value="LOCAL"
                                class="checkbox checkbox-xs checkbox-info" />
                            <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">LOCAL</span>
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
                    <span class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">PAIS</span>
                    <div class="form-control grid justify-items-start">
                        @foreach ($countries as $id => $name)
                            <label class="cursor-pointer label">
                                <input wire:model.defer='country' type="checkbox" name="countries[]" value="{{ $name }}"
                                    class="checkbox checkbox-xs checkbox-success font-serif" />
                                <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">{{ $name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
                    <span class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">SECTOR</span>
                    <div class="form-control grid justify-items-start">
                        <label class="cursor-pointer label">
                            <input wire:model.defer='sector' type="checkbox" name="sector[]" value="PUBLICO"
                                class="checkbox checkbox-xs checkbox-error" />
                            <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">PUBLICO</span>
                        </label>
                        <label class="cursor-pointer label">
                            <input wire:model.defer='sector' type="checkbox" name="sector[]" value="PRIVADO"
                                class="checkbox checkbox-xs checkbox-error" />
                            <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">PRIVADO</span>
                        </label>
                    </div>
                </div>
            </div>

            <div>
                <div
                    class=" h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
                    <span class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">COBERTURA</span>
                    <div class="form-control grid justify-items-start ">
                        @foreach ($coverages as $id => $name)
                            <label class="cursor-pointer label">
                                <input wire:model.defer='cobertura' type="checkbox" name="coverage[]" value="{{ $name }}"
                                    class="checkbox checkbox-xs checkbox-accent" />
                                <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">{{ $name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
                    <span class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">CONVENIO CON:</span>
                    <div class="form-control grid justify-items-start ">
                        @foreach ($organizations as $id => $name)
                            <label class="cursor-pointer label">
                                <input wire:model.defer='category' type="checkbox" name="organizations[]" value="{{ $name }}"
                                    class="checkbox checkbox-xs checkbox-secondary" />
                                <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">{{ $name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

            </div>
            {{-- filtro por organizacion --}}
            <div>
                <div
                    class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
                    <span class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">ORGANIZACIÓN</span>
                    <div class="form-control grid justify-items-start">
                        <label class="cursor-pointer label">
                            <input wire:model.defer='organizacion' type="checkbox" name="sector[]" value="UNIVERSIDAD"
                                class="checkbox checkbox-xs checkbox-error" />
                            <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">UNIVERSIDAD</span>
                        </label>
                        <label class="cursor-pointer label">
                            <input wire:model.defer='organizacion' type="checkbox" name="sector[]" value="EMPRESA"
                                class="checkbox checkbox-xs checkbox-error"/>
                            <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">EMPRESA</span>
                        </label>
                    </div>
                </div>
            </div>

        </div>

        <div x-data="{ open: false }" class="grid content-end my-5">
            <button x-on:click="open = !open" wire:click.prevent="reporte()" class="justify-self-end btn btn-info text-white btn-sm dark:btn-outline dark:btn-info" type="submit">CONSULTAR</button>
        </div>
    <div x-show="open" x-om:click.away="open = false" class="w-full overflow-x-auto">
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
                @php
                    $i=1;
                @endphp
                @forelse ($agreements as $agreement)
                <tr class="text-zinc-700 dark:text-zinc-400">
                    <td class="px-2 py-2 text-xs">
                        @php
                            echo $i;
                        @endphp
                    </td>
                    <td class="px-2 py-2 text-xs">
                        {{$agreement->title}}
                    </td>
                    <td class="px-2 py-2 text-xs">
                        {{$agreement->resolution}}
                    </td>
                    <td class="px-2 py-2 text-xs">
                        <?php
                                        if($agreement->status=='VIGENTE'){
                                    ?>
                                            <div class="grid justify-items-center px-10 ">
                                                <button
                                                   class="px-3 py-1 rounded-md rounded-r-lg cursor-no-drop bg-green-500 shadow-lg shadow-green-500/50 text-zinc-100">
                                                    Activo
                                                </button>
                                            </div>
                                    <?php
                                        }
                                        if($agreement->status=='POR VENCER'){
                                    ?>
                                            <div class="px-5 grid justify-items-center">
                                                <button
                                                    class=" px-2 py-1 rounded-md rounded-r-lg cursor-no-drop bg-red-500 shadow-lg shadow-red-500/50 text-zinc-100">
                                                        Por vencer
                                                </button>
                                            </div>
                                    <?php
                                        }
                                        if($agreement->status=='VENCIDO'){
                                    ?>
                                            <div class="grid justify-items-center px-10 ">
                                                <button
                                                    class="px-3 py-1 rounded-md rounded-r-lg cursor-no-drop bg-zinc-500 shadow-lg shadow-zinc-500/50 text-zinc-100">
                                                        Vencido
                                                </button>
                                            </div>
                                    <?php
                                        }
                                    ?>
                    </td>
                    <td class="px-3 py-3 text-xs text-center">
                        {{$agreement->expiration}}
                    <td class="px-3 py-3 text-center">
                        <div class="space-x-4 text-sm flex justify-center">
                            <a href="{{route('ver.id',$agreement->id)}}"
                                class="px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-zinc-400 focus:outline-none focus:shadow-outline-zinc"
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
                @php
                    $i++;
                @endphp
                @empty
                    <tr>
                        <td colspan="6" style="height: 100px" align="center">No hay Resultados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>







