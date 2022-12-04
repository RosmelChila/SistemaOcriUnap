<x-app-layout>
        <div class="flex justify-start py-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
            </svg>
            <span class="px-5">Reporte de convenio</span>
        </div>

        <div class="grid grid-rows-1 gap-4 justify-center md:grid-cols-7 ">
            <div
                class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
                <span class="text-xs font-semibold tracking-wide">RESPONSABLE</span>
                <div class="form-control">
                    @foreach ($responsibles as $responsible)
                    <label class="cursor-pointer label">
                        <input type="checkbox" class="checkbox checkbox-xs checkbox-warning" />
                        <span class="label-text px-2">{{$responsible->name}}</span>
                    </label>
                    @endforeach
                </div>
            </div>
            <div
                class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
                <span class="text-xs font-semibold tracking-wide ">LOCALIZACIÓN</span>
                <div class="form-control">
                    <label class="cursor-pointer label">
                        <input type="checkbox"class="checkbox checkbox-xs checkbox-checkbox-info" />
                        <span class="label-text px-2">INTERNACIONAL</span>
                    </label>
                    <label class="cursor-pointer label">
                        <input type="checkbox"class="checkbox checkbox-xs checkbox-checkbox-info" />
                        <span class="label-text px-2">NACIONAL</span>
                    </label>
                    <label class="cursor-pointer label">
                        <input type="checkbox"class="checkbox checkbox-xs checkbox-checkbox-info" />
                        <span class="label-text px-2">LOCALIZACIÓN</span>
                    </label>
                </div>
            </div>
            <div
                class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
                <span class="text-xs font-semibold tracking-wide">PAIS</span>
                <div class="form-control">
                    @foreach ($countries as $country)
                    <label class="cursor-pointer label">
                        <input type="checkbox" class="checkbox checkbox-xs checkbox-success" />
                        <span class="label-text px-2">{{$country->name}}</span>
                    </label>
                    @endforeach
                </div>
            </div>
            <div
                class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
                <span class="text-xs font-semibold tracking-wide">SECTOR</span>
                <div class="form-control">
                <label class="cursor-pointer label">
                    <input type="checkbox"class="checkbox checkbox-xs checkbox-checkbox-info" />
                    <span class="label-text px-2">PUBLICO</span>
                </label>
                <label class="cursor-pointer label">
                    <input type="checkbox"class="checkbox checkbox-xs checkbox-checkbox-info" />
                    <span class="label-text px-2">PRIVADO</span>
                </label>
                </div>
            </div>
            <div
                class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
                <span class="text-xs font-semibold tracking-wide">COBERTURA</span>
                <div class="form-control">
                    @foreach ($coverages as $coverage)
                    <label class="cursor-pointer label">
                        <input type="checkbox" class="checkbox checkbox-xs checkbox-accent" />
                        <span class="label-text px-2">{{$coverage->name}}</span>
                    </label>
                    @endforeach
                </div>
            </div>
            <div
                class="md:basis-1/3 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-gray-900 dark:text-gray-100 grid justify-items-start">
                <span class="text-xs font-semibold tracking-wide">CONVENIO CON:</span>
                <div class="form-control">
                @foreach ($organizations as $organization)
                    <label class="cursor-pointer label">
                        <input type="checkbox" class="checkbox checkbox-xs checkbox-secondary" />
                        <span class="label-text px-2">{{$organization->name}}</span>
                    </label>
                @endforeach
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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="stroke-info flex-shrink-0 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </button>
                <span class="text-xs font-semibold tracking-wide grid content-center">Tipo de descarga</span>
            </div>
            <div class="flex justify-end my-5">
                <button class="mx-4 btn btn-accent btn-sm dark:btn dark:btn-sm">REPORTE ESTADISTICO</button>
                <button class=" btn btn-accent btn-sm dark:btn dark:btn-sm">REPORTE</button>
            </div>
        </div>

</x-app-layout>
