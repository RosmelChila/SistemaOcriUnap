<x-app-layout>
    <div class="grid grid-rows-1 gap-4 justify-center md:grid-cols-7 ">
        <div
            class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
            <span class="text-xs font-semibold tracking-wide">RESPONSABLE</span>
            <div class="form-control">
                <label class="cursor-pointer label">
                    <input type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-warning" />
                    <span class="label-text px-2">FIMEES</span>
                </label>
            </div>
        </div>
        <div
            class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
            <span class="text-xs font-semibold tracking-wide ">LOCALIZACIÓN</span>
            <div class="form-control">
                <label class="cursor-pointer label">
                    <input type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-checkbox-info" />
                    <span class="label-text px-2">Internacional</span>
                </label>
            </div>
        </div>
        <div
            class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
            <span class="text-xs font-semibold tracking-wide">PAIS</span>
            <div class="form-control">
                <label class="cursor-pointer label">
                    <input type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-success" />
                    <span class="label-text px-2">Argentina</span>
                </label>
            </div>
        </div>
        <div
            class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
            <span class="text-xs font-semibold tracking-wide">SECTOR</span>

        </div>
        <div
            class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
            <span class="text-xs font-semibold tracking-wide">COBERTURA</span>
            <div class="form-control">
                <label class="cursor-pointer label">
                    <input type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-accent" />
                    <span class="label-text px-2">Marco</span>
                </label>
            </div>
        </div>
        <div
            class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
            <span class="text-xs font-semibold tracking-wide">CONVENIO CON:</span>
            <div class="form-control">
                <label class="cursor-pointer label">
                    <input type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-secondary" />
                    <span class="label-text px-2">Hospitales</span>
                </label>
            </div>
            <div class="form-control ch">
                <label class="cursor-pointer label ">
                    <input type="checkbox" checked="checked" class="checkbox checkbox-xs checkbox-secondary" />
                    <span class="label-text px-2">Mineras</span>
                </label>
            </div>
        </div>
        <div
            class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100">
            <span class="text-xs font-semibold tracking-wide">FECHAS</span>
              <label class="input-group input-group-vertical">
                <span class="text-sm">desde</span>
                <input type="date" class="input input-bordered input-xs" />
              </label>
              <label class="input-group input-group-vertical">
                <span class="text-sm">hasta</span>
                <input type="date" class="input input-bordered input-xs" />
              </label>
        </div>

    </div>
    <div class="">
        <div class="flex justify-end my-5">
        <button class="px-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </button>
        <span class="text-xs font-semibold tracking-wide grid content-center">Tipo de descarga</span>
    </div>
        <div class="flex justify-end my-5">
        <button class="mx-4 btn btn-accent btn-sm dark:btn dark:btn-sm">REPORTE ESTADISTICO</button>
        <button class=" btn btn-accent btn-sm dark:btn dark:btn-sm">REPORTE</button>
    </div>
    </div>

</x-app-layout>
