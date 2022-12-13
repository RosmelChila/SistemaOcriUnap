<div>
    <div class="mt-4">
        <div wire:click="$set('open',true)"
            class="h-full md:basis-1/3 max-w-sm space-y-1 overflow-hidden rounded-lg shadow-md dark:bg-zinc-900 p-2 cursor-pointer grid justify-center">
            <div class="grid justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                  </svg>
    
            </div>
            <span class="label-text px-1 text-zinc-700 dark:text-zinc-400 font-serif text-xs">Region</span>
    
        </div>
    
        <x-dialog-modal wire:model="open">
            <x-slot name="title">
                <h1>agregar region</h1>
            </x-slot>
            <x-slot name="content">
                <form action="">
                    <div class="grid grid-rows-2 grid-flow-col dark:bg-zinc-900 rounded-lg py-4">
                        <div class="px-4 grid content-center col-span-1">
                            <select wire:model.defer="country_id" value="{{ old('id') }}"
                            class="select select-sm bg-zinc-200 dark:bg-zinc-800 dark:select-sm font-light">
                            <option selected value=''>...</option>
                            @forelse ($countries as $id => $name)
                                <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @empty
                                <option value="">No hay paisess</option>
                            @endforelse
                        </select>
                            <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">REGION</span>
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
</div>
