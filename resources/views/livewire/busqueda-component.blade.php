<div>
    @livewireStyles
        <div class="grid justify-center h-10">
            <div>
            </div>
            <div>
                <input wire:model='searchTerm' type="text" placeholder="Ingrese Nombre de Convenio"
                    class="input w-96 bg-white dark:bg-zinc-900 h-14" />
            </div>
        </div>
        <br>
        <div class="container mx-auto grid grid-row w-full rounded-md bg-white dark:bg-zinc-900 p-1 text-zinc-800 dark:text-white">
        @forelse ($agreements as $agreement)
        <div class="mt-2">
            <div class="dark:bg-zinc-800 my-2 rounded-sm p-2">
            <span class="text-sm">{{$agreement->title}}</span>
            <div class="flex justify-end ">
                <button class="btn btn-sm btn-accent dark:btn-success mx-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                  </svg>
                  </button>
                <button class="btn btn-sm btn-accent dark:btn-success"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
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
     </div>
     @livewireScripts
</div>
