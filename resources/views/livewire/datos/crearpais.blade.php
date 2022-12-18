<div class="mt-4">
    <div wire:click="$set('open',true)"
        class="flex  rounded-lg shadow-md dark:bg-zinc-900 p-2 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M3 2.25a.75.75 0 01.75.75v.54l1.838-.46a9.75 9.75 0 016.725.738l.108.054a8.25 8.25 0 005.58.652l3.109-.732a.75.75 0 01.917.81 47.784 47.784 0 00.005 10.337.75.75 0 01-.574.812l-3.114.733a9.75 9.75 0 01-6.594-.77l-.108-.054a8.25 8.25 0 00-5.69-.625l-2.202.55V21a.75.75 0 01-1.5 0V3A.75.75 0 013 2.25z" clip-rule="evenodd" />
          </svg>
          <span class="label-text text-zinc-700 dark:text-zinc-400 font-light text-sm px-4">Pais</span>

        </div>

    </div>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            <h1>agregar pais</h1>
        </x-slot>
        <x-slot name="content">
            <form action="">
                <div class="grid grid-rows-2 grid-flow-col dark:bg-zinc-900 rounded-lg py-4">
                    <div class="px-4 grid content-center col-span-1">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Nombre de pais</span>
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
