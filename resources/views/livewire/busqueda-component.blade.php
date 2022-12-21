<div class="h-screen bg-inicio dark:bg-zinc-900  ">
    @livewireStyles
    <section class="grid px-[10%] py-[3%]">

        <img src="/img/Ellipse.png" class="z-20 animate-ping w-4 absolute left-24 top-56" />
        <img src="/img/Ellipse.png" class="z-20 animate-ping w-6 absolute right-96 top-36" />
        <img src="/img/Ellipse.png" class="z-20 animate-ping w-6 absolute left-64 bottom-24" />
        <img src="/img/Ellipse.png" class="z-20 animate-ping w-6 absolute right-40 top-64" />

        <div class="grid grid-cols-1 md:grid-cols-1 ">
            <div class=" grid justify-items-center">
                <h1 class="text-3xl leading-normal flex">
                    <img src="/img/package.png" class="h-8 animate-bounce" />

                    Buscar convenios
                    {{-- <span class="underline decoration-teal-500">customers</span> --}}
                </h1>
                <p class="py-5 text-white ">Suscritos con la Universidad Nacional del Altiplano Puno</p>
                <div class="grid justify-center md:flex">
                    <input wire:model='searchTerm' type="text" placeholder="Ingrese Nombre de Convenio"
                    class="input shadow-sm text-zinc-900 bg-white dark:text-white dark:bg-zinc-900 py-2  text-xs w-80 text-center input-sm" />
                <button class="bg-btn-inicio px-7 rounded-md tracking-wide py-2 text-xs hover:scale-110 duration-300"
                    type="submit">
                    Go
                </button>
                </div>

            </div>

                    <div class="py-10">
                        <div class="w-full overflow-hidden">
                            <span class="text-xs text-white dark:text-zinc-100">{{ $agreements->count() }} Convenios
                                encontrados</span>
                            @if ($agreements->count())
                                <div class="w-full overflow-x-auto bg-zinc-100 dark:bg-zinc-800 rounded-lg ">

                                    <table class="rounded-md bg-white dark:bg-zinc-800 w-full">
                                        <thead>
                                            <tr
                                                class=" text-xs font-semibold text-btn-inicio uppercase dark:border-zinc-700 bg-white dark:text-zinc-100 dark:bg-zinc-900">
                                                <th class="px-2 py-2 w-10">N°</th>
                                                <th class="px-2 py-2 cursor-pointer" wire:click="order('title')">TÍTULO
                                                </th>
                                                <th class="px-2 py-2 cursor-pointer w-1/6 text-center"
                                                    wire:click="order('status')">
                                                    ESTADO</th>
                                                <th class="px-2 py-2 w-1/6 text-center">ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            @php $i=1; @endphp
                                            @foreach ($agreements as $agreement)
                                                <tr class="text-zinc-800 dark:text-zinc-100">

                                                    <td class="px-2 py-2 text-xs">
                                                        @php echo $i; @endphp
                                                    </td>
                                                    <td class="px-2 py-2 text-xs">
                                                        {{ $agreement->title }}
                                                    </td>
                                                    <td class="px-2 py-2 text-xs">
                                                        <?php
                    if($agreement->status=='VIGENTE'){
                ?>
                                                        <div class="grid justify-items-center px-10 ">
                                                            <span
                                                                class="bg-green-600 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">vigente</span>
                                                        </div>
                                                        <?php
                    }
                    if($agreement->status=='POR VENCER'){
                ?>
                                                        <div class="px-5 grid justify-items-center">
                                                            <span
                                                                class="bg-red-500 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">Por
                                                                vencer</span>
                                                        </div>
                                                        <?php
                    }
                    if($agreement->status=='VENCIDO'){
                ?>
                                                        <div class="px-5 grid justify-items-center">
                                                            <span
                                                                class="bg-zinc-600 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">Vencido</span>
                                                        </div>
                                                        <?php
                    }
                ?>
                                                    </td>
                                                    <td class="px-2 py-2 text-xs text-center">
                                                        <a target="_blank"
                                                            href="{{ route('descarga.path', $agreement->id) }}"
                                                            class="">
                                                            <button class="px-2 py-1 rounded-md text-white bg-inicio-ver"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="currentColor" class="w-4 h-4">
                                                                <path fill-rule="evenodd"
                                                                    d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z"
                                                                    clip-rule="evenodd" />
                                                            </svg></button>
                                                        </a>
                                                        <a href="{{ route('ver2.id2', $agreement->id) }}">
                                                            <button class="px-2 py-1 rounded-md text-white bg-inicio-descargar"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" fill="currentColor"
                                                                    class="w-4 h-4">
                                                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </button></a>
                                                    </td>
                                                </tr>
                                                @php $i++; @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="bg-sky-600 w-full overflow-x-auto">
                                        <table class="table-fixed">


                                        </table>
                                    @else
                                        <div class="mt-2">
                                            <div class="dark:bg-zinc-800 my-2 rounded-sm p-2">
                                                <span class="text-sm"> No hay Resultados</span>
                                            </div>
                            @endif
                        </div>
                        {{ $agreements->links('pagination-links') }}
                    </div>

                </div>



        @livewireScripts

    </section>
</div>
