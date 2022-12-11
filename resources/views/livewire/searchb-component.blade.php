<div>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-zinc-500 dark:text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input wire:model='search' type="text" name="search" id="default-search" class="h-8 w-96 pl-8 pr-2 text-sm text-zinc-700 placeholder-zinc-600 bg-zinc-100 border-0 rounded-md dark:placeholder-zinc-500 dark:focus:shadow-outline-zinc dark:focus:placeholder-zinc-600 dark:bg-zinc-800 dark:text-zinc-200 focus:placeholder-zinc-500 focus:bg-white focus:border-sky-300 focus:outline-none focus:shadow-outline-sky form-input" placeholder=" Nombre convenio...." required>
            <button wire:click.prevent='buscar' type="submit" class="px-2 bg-zinc-100 dark:bg-zinc-800 rounded-lg">Buscar</button>
        </div>
</div>
