<div class="py-40">

    @livewireStyles
    <div class="grid justify-center h-10 gap-4 text-white">
        <div class="text-center mb-5 text-5xl font-bold text-zinc-800 dark:text-white" ><h1>¡Realiza tu busqueda!</h1></div>
        <div class="container grid grid-cols-4 text-zinc-800 dark:text-white">

            <div class="">
                <div class="">
                    <label for="" class="">Buscar por Titulo de convenio
                        <input wire:model='searchTerm' type="text" placeholder="Ingrese Nombre de Convenio"
                            class="input w-full text-zinc-900 bg-white dark:text-white dark:bg-zinc-900 shadow-lg my-2" /></label>
                </div>
                {{-- <div>
                    <label for="" class="">Responsables
                        <select
                            class="select w-full  text-zinc-900 bg-white dark:text-white dark:bg-zinc-900 shadow-lg my-2">
                            <option disabled selected>....</option>
                            <option>Homer</option>
                            <option>Marge</option>
                            <option>Bart</option>
                            <option>Lisa</option>
                            <option>Maggie</option>
                        </select></label>
                </div> --}}

                {{-- <div>
                    <label for="" class="">Localicacion
                        <select
                            class="select w-full text-zinc-900 bg-white dark:text-white dark:bg-zinc-900 shadow-lg my-2 ">
                            <option disabled selected>...</option>
                            <option>Homer</option>
                            <option>Marge</option>
                            <option>Bart</option>
                            <option>Lisa</option>
                            <option>Maggie</option>
                        </select></label>
                </div> --}}
            </div>
            <div class="col-span-3 px-10">
                <span>{{$agreements->count()}} Convenios Encontrados</span>
                @if ($agreements->count())
                <table class="table-fixed ">
                    <thead>
                        <tr
                            class=" text-xs font-semibold tracking-wide text-left text-zinc-500 uppercase border-b dark:border-zinc-700 bg-zinc-50 dark:text-zinc-400 dark:bg-zinc-900">
                            <th class="px-2 py-2">N°</th>
                            <th class="px-2 py-2 cursor-pointer" wire:click="order('title')">TÍTULO</th>
                            <th class="px-2 py-2 cursor-pointer w-1/6 text-center" wire:click="order('status')">ESTADO</th>
                            <th class="px-2 py-2 w-1/6 text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-zinc-700 dark:bg-zinc-900">
                        @foreach ($agreements as $agreement)
                        <tr class="text-zinc-700 dark:text-zinc-400">
                            <td class="px-2 py-2 text-xs">
                                1
                            </td>
                            <td class="px-2 py-2 text-xs">
                                {{$agreement->title}}
                            </td>
                            <td class="px-2 py-2 text-xs">
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
                                     <div class="px-5 grid justify-items-center">
                                        <span class="bg-zinc-600 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">Vencido</span>
                                    </div>
                            <?php
                                }
                            ?>
                            </td>
                            <td class="px-2 py-2 text-xs"   >
                                <a href="">
                                    <button class="btn btn-sm btn-warning dark:btn-warning mx-2"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-4 h-4">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button></a>
                                    <a href="{{ route('ver') }}">
                                    <button class="btn btn-sm btn-error dark:btn-error"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-4 h-4">
                                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                            <path fill-rule="evenodd"
                                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <div class="mt-2">
                    <div class="dark:bg-zinc-800 my-2 rounded-sm p-2">
                        <span class="text-sm"> No hay Resultados</span>
                    </div>
                @endif
                <div class="col-span-3 px-10">
                    {{$agreements->links()}}
                </div>
                {{-- <div
                    class=" container mx-auto grid grid-row w-full " >
                    @forelse ($agreements as $agreement)
                        <div class="mt-2 rounded-md bg-white dark:bg-zinc-800 p-1 text-zinc-800 dark:text-white">
                            <div class=" p-2">
                                <span class="text-sm">{{ $agreement->title }}</span>
                                <div class="flex justify-end  ">
                                    <button class="btn btn-sm btn-warning dark:btn-warning mx-2"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-4 h-4">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button class="btn btn-sm btn-error dark:btn-error"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-4 h-4">
                                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                            <path fill-rule="evenodd"
                                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="mt-2">
                            <div class="dark:bg-zinc-800 my-2 rounded-sm p-2">
                                <span class="text-sm"> No hay Resultados</span>
                            </div>
                    @endforelse
                </div> --}}
            </div>
        </div>
        @livewireScripts
    </div>


</div>
