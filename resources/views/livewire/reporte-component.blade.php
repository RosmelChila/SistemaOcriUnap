<div class="font-light">

    <div class="grid grid-cols-1 w-full gap-1 py-1 md:grid-cols-5">

        <div class=" space-y-1  bg-white max-w-sm  overflow-hidden rounded-lg shadow-md dark:bg-zinc-900 ">
            <span
                class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif py-1">FECHAS</span>
            <div class="form-control grid justify-items-center">
                <label class="input-group input-group-vertical">
                    <input wire:model.defer='inidate' type="date" name="date1"
                        class="input input-xs mx-2 bg-zinc-100 dark:bg-zinc-900  " />
                </label>
                <span class="text-zinc-700 dark:text-zinc-400 text-xs text-center"> hasta</span>
                <label class="input-group input-group-vertical">
                    <input wire:model.defer='enddate' type="date" name="date2"
                        class="input input-xs mx-2 bg-zinc-100 dark:bg-zinc-900 " />
                </label>
            </div>
        </div>
        <div class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
            <span
                class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">ESTADOS</span>
            <div class="form-control grid justify-items-start">
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
                    <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">VENCIDOS</span>
                </label>

            </div>
        </div>
        {{-- localizacion --}}
        <div
            class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
            <span
                class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">LOCALIZACIÓN</span>
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
        {{-- sector --}}
        <div
            class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
            <span
                class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">SECTOR</span>
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

        {{-- organizacion --}}
        <div
            class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md bg-white dark:bg-zinc-900 p-2">
            <span
                class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">ORGANIZACIÓN</span>
            <div class="form-control grid justify-items-start">
                <label class="cursor-pointer label">
                    <input wire:model.defer='organizacion' type="checkbox" name="sector[]" value="UNIVERSIDAD"
                        class="checkbox checkbox-xs checkbox-error" />
                    <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">UNIVERSIDAD</span>
                </label>
                <label class="cursor-pointer label">
                    <input wire:model.defer='organizacion' type="checkbox" name="sector[]" value="EMPRESA"
                        class="checkbox checkbox-xs checkbox-error" />
                    <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">EMPRESA</span>
                </label>
            </div>
        </div>

    </div>


    <div class=" grid grid-cols-1 gap-1">
        {{-- responsables --}}
        <div class="rounded-sm shadow-md bg-white dark:bg-zinc-900 p-2">
            <span
                class="text-xs tracking-wide grid justify-items-center text-zinc-900 dark:text-zinc-100">RESPONSABLE</span>
            <div class="form-control grid justify-items-start grid-cols-3 md:grid-cols-8">
                @foreach ($responsibles as $id => $name)
                    <label class="cursor-pointer label ">
                        <input wire:model.defer='responsible' type="checkbox" value="{{ $name }}"
                            class="checkbox checkbox-xs checkbox-warning font-serif" />
                        <span
                            class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">{{ $name }}</span>
                    </label>
                @endforeach
            </div>
        </div>
        {{-- pais --}}

        <div class="rounded-sm shadow-md bg-white dark:bg-zinc-900 p-2">
            <span
                class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">PAIS</span>
            <div class="form-control grid justify-items-start grid-cols-3 md:grid-cols-8">
                @foreach ($countries as $id => $name)
                    <label class="cursor-pointer label">
                        <input wire:model.defer='country' type="checkbox" name="countries[]"
                            value="{{ $name }}" class="checkbox checkbox-xs checkbox-success font-serif" />
                        <span
                            class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">{{ $name }}</span>
                    </label>
                @endforeach
            </div>
        </div>
        {{-- cobertura --}}
        <div class="rounded-sm shadow-md bg-white dark:bg-zinc-900 p-2">
            <span
                class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">COBERTURA</span>
            <div class="form-control grid justify-items-start grid-cols-3 md:grid-cols-8">
                @foreach ($coverages as $id => $name)
                    <label class="cursor-pointer label">
                        <input wire:model.defer='cobertura' type="checkbox" name="coverage[]"
                            value="{{ $name }}" class="checkbox checkbox-xs checkbox-accent" />
                        <span
                            class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">{{ $name }}</span>
                    </label>
                @endforeach
            </div>
        </div>
        {{-- convenio con    --}}
        <div class="rounded-sm shadow-md bg-white dark:bg-zinc-900 p-2">
            <span
                class="text-xs tracking-wide grid justify-items-center text-zinc-800 dark:text-zinc-100 font-seerif">CONVENIO
                CON:</span>
            <div class="form-control grid justify-items-start grid-cols-3 md:grid-cols-8">
                @foreach ($organizations as $id => $name)
                    <label class="cursor-pointer label">
                        <input wire:model.defer='category' type="checkbox" name="organizations[]"
                            value="{{ $name }}" class="checkbox checkbox-xs checkbox-secondary" />
                        <span
                            class="label-text px-1 text-zinc-700 dark:text-zinc-400 text-xs">{{ $name }}</span>
                    </label>
                @endforeach
            </div>
        </div>

    </div>










    <div class="py-4 grid grid-cols-1 md:grid-cols-3 justify-center">
        <div class="">
            <div class=" my-1">

                <span class="text-xs tracking-wide grid content-center font-light">Descaargar según las opciones
                </span>
            </div>
            <div class="flex justify-end ">
                <a target="_blank" href="" wire:click='genpdfcat'
                    class=" btn btn-success text-white btn-xs  dark:btn-success">REPORTE</a>
                <input type="text" wire:model='title' placeholder=""
                    class="input input-xs bg-zinc-200 dark:bg-zinc-900 dark:input dark:input-xs text-xs w-full mx-1">
            </div>
        </div>

        <div class="">
            <div class="flex justify-end my-1">
                <span class="text-xs font-light tracking-wide grid content-center">Descargar reporte estadístico</span>
            </div>
            <div class="flex justify-end ">
                <a target="_blank" href="" wire:click='genpdfest'
                    class="btn btn-info text-white btn-xs  dark:btn-info">REPORTE
                    ESTADISTICO</a>
            </div>
        </div>

        <div x-data="{ open: false }" class="">
            <div class="flex justify-end my-1">
                <span class="text-xs font-light tracking-wide grid content-center">Consultar convenios</span>
            </div>
            <div class="flex justify-end ">
                <button x-on:click="open = !open" wire:click.prevent="reporte()"
                class="justify-self-end btn btn-primary text-white  btn-xs dark:btn-primary"
                type="submit">CONSULTAR</button>
            </div>


{{--
            <span class="text-xs font-light tracking-wide grid content-center">Descargar reporte estadístico</span>
            <button x-on:click="open = !open" wire:click.prevent="reporte()"
                class="justify-self-end btn btn-info text-white  btn-xs dark:btn-info"
                type="submit">CONSULTAR</button> --}}
        </div>
    </div>


    <div x-show="open" x-om:click.away="open = false" class="w-full overflow-x-auto">
        <table class="table-fixed ">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-zinc-600 uppercase border-b dark:border-zinc-700 bg-teal-100 dark:text-zinc-400 dark:bg-zinc-900">
                    <th class="px-2 py-2">N°</th>
                    <th class="px-2 py-2 w-1/3 text-center">TÍTULO</th>
                    <th class="px-2 py-2 w-1/5 text-center">RESOLUCIÓN</th>
                    <th class="px-2 py-2 w-1/6 text-center">ESTADO</th>
                    <th class="px-2 py-2 w-1/6 text-center">EXPIRACIÓN</th>
                    <th class="px-2 py-2 w-1/6 text-center">VER CONVENIO</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:divide-zinc-700 dark:bg-zinc-900">
                @php
                    $i = 1;
                @endphp
                @forelse ($agreements as $agreement)
                    <tr class="text-zinc-700 dark:text-zinc-400">
                        <td class="px-2 py-2 text-xs">
                            @php
                                echo $i;
                            @endphp
                        </td>
                        <td class="px-2 py-2 text-xs">
                            {{ $agreement->title }}
                        </td>
                        <td class="px-2 py-2 text-xs">
                            {{ $agreement->resolution }}
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
                            {{ $agreement->expiration }}
                        <td class="px-3 py-3 text-center grid justify-items-center">
                            <div class="space-x-4 text-sm">
                                <a href="{{ route('ver.id', $agreement->id) }}"
                                    class="flex items-center justify-between px-1 py-1 text-sm font-medium leading-5 bg-teal-500 rounded-lg text-white focus:outline-none focus:shadow-outline-zinc"
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
                        <td colspan="6" style="height: 100px" class="text-xs text-center">No hay Resultados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
