<div class="mt-4">
    <div wire:click="$set('open',true)"
        class="flex  rounded-lg shadow-md dark:bg-zinc-900 p-2 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625z" />
            <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
          </svg>


          <span class="label-text text-zinc-700 dark:text-zinc-400 font-light text-sm px-4">Responsable</span>

        </div>

    </div>
        <x-dialog-modal wire:model="open">
            <x-slot name="title">
                <h1>agregar Responsable</h1>
            </x-slot>
            <x-slot name="content">
                <form action="">
                    <div class="grid grid-rows-2 grid-flow-col dark:bg-zinc-900 rounded-lg py-4">
                        <div class="px-4 grid content-center col-span-1">
                            <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">Responsable</span>
                            </label>
                            <input type="text" placeholder=""
                                class="input input-bordered input-success input-sm  w-full input-md bg-white dark:bg-zinc-800 dark:input dark:input-sm"
                                wire:model.defer="name" />
                            {{-- {{ $name }} --}}
                        </div>
                        <div class="px-4 grid content-center col-span-1">
                            <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">Descripcion</span>
                            </label>
                            <input type="text" placeholder=""
                                class="input input-bordered input-success input-sm  w-full input-md bg-white dark:bg-zinc-800 dark:input dark:input-sm"
                                wire:model.defer="description" />
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
