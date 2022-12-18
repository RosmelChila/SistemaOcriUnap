<div class=" mt-4">
    <div wire:click="$set('open',true)"
        class="flex  rounded-lg shadow-md dark:bg-zinc-900 p-2 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zm9.586 4.594a.75.75 0 00-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.116-.062l3-3.75z" clip-rule="evenodd" />
          </svg>

          <span class="label-text text-zinc-700 dark:text-zinc-400 font-light text-sm px-4">Cobertura</span>

        </div>

    </div>


    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            <h1>agregar nueva cobertura</h1>
        </x-slot>
        <x-slot name="content">
            <form action="">
                <div class="grid grid-rows-2 grid-flow-col dark:bg-zinc-900 rounded-lg py-4">
                    <div class="px-4 grid content-center col-span-1">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Nombre de la cobertura</span>
                        </label>
                        <input type="text" placeholder=""
                            class="input input-bordered input-success input-sm  w-full input-md bg-white dark:bg-zinc-800 dark:input dark:input-sm"
                            wire:model.defer="name" />
                        {{-- {{ $name }} --}}
                    </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="$set('open',false)"
                class="mx-4 btn btn-accent btn-sm dark:btn dark:btn-sm">CANCELAR</button>
            <button wire:click="save" class=" btn btn-accent btn-sm dark:btn dark:btn-sm"
                type="submit">GUARDAR</button>
        </x-slot>
    </x-dialog-modal>

</div>
