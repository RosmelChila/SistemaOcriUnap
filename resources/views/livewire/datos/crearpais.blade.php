<div class="">
    <button wire:click="$set('open',true)" class=" btn btn-accent btn-sm dark:btn dark:btn-sm">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1FB2A6" class="w-5 h-5">
            <path fill-rule="evenodd"
                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z"
                clip-rule="evenodd" />
        </svg><span>AGREGAR NUEVO PAIS</span>
    </button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            <h1>agregar pais</h1>
        </x-slot>
        <x-slot name="content">
            <form action="">
                <div class="grid grid-rows-2 grid-flow-col dark:bg-gray-900 rounded-lg py-4">
                    <div class="px-4 grid content-center col-span-1">
                        <label class="label">
                            <span class="label-text text-gray-900 dark:text-gray-100">Nombre de pais</span>
                        </label>
                        <input type="text" placeholder="RESOLUCION 123-XX"
                            class="input input-bordered input-success input-sm  w-full input-md bg-white dark:bg-gray-800 dark:input dark:input-sm"
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
