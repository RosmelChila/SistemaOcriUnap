<div class="mt-4">
    <div wire:click="$set('open',true)"
        class="flex  rounded-lg shadow-md dark:bg-zinc-900 p-2 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
          </svg>


          <span class="label-text text-zinc-700 dark:text-zinc-400 font-light text-sm px-4">Región</span>

        </div>

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
                    type="submit" >GUARDAR</button>
            </x-slot>
        </x-dialog-modal>
</div>
