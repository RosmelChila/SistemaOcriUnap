<x-app-layout>
    <form action="" class="">
        <div class="grid grid-cols-1 gap-3">
            {{-- para datos 1 --}}
            <div class="grid grid-rows-2 grid-flow-col dark:bg-zinc-900 rounded-lg py-4">
                <div class="px-4 grid content-center col-span-1">
                    <label class="label">
                        <span class="label-text text-zinc-900 dark:text-zinc-100">Resolución</span>
                    </label>
                    <input type="text" placeholder="RESOLUCION 123-XX"
                        class="input input-bordered input-success input-sm  w-full input-md bg-white dark:bg-zinc-800 dark:input dark:input-sm" />
                </div>
                <div class="px-4  grid content-center row-span-1 col-span-1">
                    <label class="label">
                        <span class="label-text text-zinc-900 dark:text-zinc-100">Título</span>
                    </label>
                    <input type="text" placeholder="CONVENIO ......"
                        class="input input-bordered input-success input-sm  w-full input-md bg-white dark:bg-zinc-800 dark:input dark:input-sm" />
                </div>
                <div class=" px-4 row-span-2">
                    <label class="label">
                        <span class="label-text text-zinc-900 dark:text-zinc-100">Objetivos</span>
                    </label>
                    <textarea class="textarea textarea-success w-full bg-white dark:bg-zinc-900 dark:textarea h-24" placeholder="OBJETIVOS"></textarea>
                </div>
            </div>
            {{--para los dotos 2--}}
            <div>
                <div class="grid grid-row md:grid-cols-4 dark:bg-zinc-900 rounded-lg py-4">
                    <div class="px-4 grid content-center col-span-2">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Fecha de suscripción</span>
                        </label>
                        <input type="date" placeholder=""
                            class="input input-bordered input-success input-sm bg-white dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                    </div>
                    <div class="px-4 grid content-center col-span-2">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Fecha aprobación C.U.</span>
                        </label>
                        <input type="date" placeholder=""
                            class="input input-bordered input-success input-sm bg-white dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                    </div>

                    <div class="px-4 grid content-center col-span-2">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Cobertura</span>
                        </label>
                        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
                            <option disabled selected>..</option>
                            <option>Convenio marco</option>
                        </select>
                    </div>
                    <div class="px-4 grid content-center col-span-2">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Convenio con:</span>
                        </label>
                        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
                            <option disabled selected>..</option>
                            <option>Ministerios</option>
                        </select>
                    </div>



                    <div class="px-4 grid content-center">
                        {{-- con modal --}}
                        <a href="#my-modal-2" class="flex flex-row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1FB2A6" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                                 </svg><span class="label-text text-zinc-900 dark:text-zinc-100">Pais</span>
                            </a>
                            {{-- contenido del modal --}}
                          <div class="modal" id="my-modal-2">
                            <div class="modal-box bg-white dark:bg-zinc-800">
                                <h3 class="font-bold text-lg">Agregar Pais</h3>
                                <input type="text" placeholder="RESOLUCION 123-XX"
                                class="input input-bordered input-success input-sm  w-full input-md bg-white dark:bg-zinc-800 dark:input dark:input-sm" />
                                <div class="modal-action">
                                <a href="#" class="btn-success px-4 rounded-lg">AGREGAR</a>
                                </div>
                            </div>
                            </div>
                            {{-- fin de modal --}}
                        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
                            <option disabled selected>...</option>
                            <option>Peru</option>
                        </select>
                    </div>
                    <div class="px-4 grid content-center">
                        <button class="flex row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="stroke-info flex-shrink-0 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg> <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">Región</span>
                            </label></button>
                        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
                            <option disabled selected>...</option>
                            <option>Puno</option>
                        </select>
                    </div>
                    <div class="px-4 grid content-center">
                        <button class="flex row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="stroke-info flex-shrink-0 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg> <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">provincia</span>
                            </label></button>
                        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
                            <option disabled selected>...</option>
                            <option>Melgar</option>
                        </select>
                    </div>
                    <div class="px-4 grid content-center">
                        <button class="flex row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="stroke-info flex-shrink-0 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg> <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">Distrito</span>
                            </label></button>
                        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
                            <option disabled selected>...</option>
                            <option>ayaviri</option>
                        </select>
                    </div>
                    <div class="px-4 grid content-center">
                        <button class="flex row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="stroke-info flex-shrink-0 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg> <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">Localización</span>
                            </label></button>
                        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
                            <option disabled selected>...</option>
                            <option>INTERNACIONAL</option>
                            <option>NACIONAL</option>
                            <option>LOCAL</option>
                        </select>
                    </div>
                    <div class="px-4 grid content-center">
                        <button class="flex row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="stroke-info flex-shrink-0 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg> <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">Sector</span>
                            </label></button>
                        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
                            <option disabled selected>...</option>
                            <option>PUBLICO</option>
                            <option>PRIVADO</option>
                        </select>
                    </div>
                    <div class="px-4 grid content-center">
                        <button class="flex row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="stroke-info flex-shrink-0 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg> <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">Organización</span>
                            </label></button>
                        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
                            <option disabled selected>...</option>
                            <option>UNIVERSIDAD</option>
                            <option>EMPRESA</option>
                        </select>
                    </div>
                    <div class="px-4 grid content-center">
                    </div>
                </div>
            </div>
            {{-- para los responsables --}}
            <div class="p-4 dark:bg-zinc-900 rounded-lg py-4">
                <div x-data="{ show: true }" class="w-full ">
                    <label for="check-menu" class="flex flex-row  align-middle cursor-pointer w-70px">
                        <input type="checkbox" id="check-menu" class="hidden" x-model="show" />
                        <span class="duration-[400ms] label-text text-zinc-900 dark:text-zinc-200">Seleccionar
                            Responsables</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1FB2A6" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                            </svg>
                    </label>
                    <div x-show="show"
                        class=" px-4 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-zinc-900 dark:text-zinc-200 grid justify-items-start">
                        <div class="form-control px-2 grid grid-cols-10">
                            <label class="cursor-pointer label">
                                <input type="checkbox"class="checkbox checkbox-xs checkbox-checkbox-info" />
                                <span class="label-text px-2  ">FIMMES</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            {{-- para cargar el pdf --}}
            <div class="grid content-center p-4 dark:bg-zinc-900 rounded-lg py-4">
                <span class="label-text text-zinc-900 dark:text-zinc-100 py-2 ">Convenio Escaneado (PDF)</span>
                <input type="file"
                    class="file-input file-input-xs file-input-bordered file-input-accent w-full max-w-xs bg-zinc-200 dark:bg-zinc-900" />
            </div>
        </div>

        <div class="">
            <div class="flex justify-end my-5">
                <span class="text-xs font-semibold tracking-wide grid content-center">Acciones</span>
            </div>
            <div class="flex justify-end my-5">
                <button class="mx-4 btn btn-accent btn-sm dark:btn dark:btn-sm">CANCELAR</button>
                <button class=" btn btn-accent btn-sm dark:btn dark:btn-sm" type="submit">ACTUALIZAR</button>
            </div>
        </div>
    </form>
</x-app-layout>

