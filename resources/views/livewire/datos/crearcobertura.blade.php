<div class=" mt-4">
    <div  wire:click="$set('open',true)"  class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md dark:bg-zinc-900 p-2 cursor-pointer grid justify-center">
        <div class="grid justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
          </svg></div>
    <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 font-serif text-xs">Cobertura</span>

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
