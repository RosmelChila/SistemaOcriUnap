<div>

    <form >
        @csrf
        <div class="grid grid-cols-1 gap-3">
            {{-- para datos 1 --}}
            <div class="shadow-lg grid grid-rows-2 grid-flow-col dark:bg-zinc-900 rounded-lg py-4">
                <div class="px-4 grid content-center col-span-1">
                    <label class="label">
                        <span class="label-text text-zinc-900 dark:text-zinc-100">Resolución</span>
                    </label>
                    <input wire:model="resolution" type="text" name="resolution" placeholder="RESOLUCION 123-XX"
                        class="input input-bordered input-success input-sm  w-full input-md bg-white dark:bg-zinc-800 dark:input dark:input-sm" />
                    <x-input-error for="resolution" />

                </div>
                <div class="px-4  grid content-center row-span-1 col-span-1">
                    <label class="label">
                        <span class="label-text text-zinc-900 dark:text-zinc-100">Título</span>
                    </label>
                    <input wire:model='title' type="text" name="title" placeholder="CONVENIO ......"
                        class="input input-bordered input-success input-sm  w-full input-md bg-white dark:bg-zinc-800 dark:input dark:input-sm" />
                    <x-input-error for="title" />

                </div>
                <div class=" px-4 row-span-2">
                    <label class="label">
                        <span class="label-text text-zinc-900 dark:text-zinc-100">Objetivos</span>
                    </label>
                    <textarea wire:model='objetive' name="objetive" class="textarea textarea-success w-full bg-white dark:bg-zinc-900 dark:textarea h-24"
                        placeholder="OBJETIVOS"></textarea>
                    <x-input-error for="objetive" />

                </div>
            </div>

            <div class="shadow-lg  dark:bg-zinc-900 rounded-lg py-4">
                <div class="grid grid-row md:grid-cols-4 ">
                    <div class="px-4 grid content-center col-span-2">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Fecha de
                                suscripción</span>
                        </label>
                        <input wire:model='subscription' name="subscription" type="date" placeholder=""
                            class="input input-bordered input-success input-sm bg-white dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                    <x-input-error for="subscription" />

                    </div>
                    {{-- años vencimiento --}}
                    <div class="px-4 grid content-center">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Vencimiento en años</span>
                        </label>
                        <input wire:model='years' type="number" name="years" value="0"
                            class="input input-bordered input-success input-sm bg-white dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                    <x-input-error for="years" />

                    </div>
                    <div class="px-4 grid content-center">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Vencimiento en mes</span>
                        </label>
                        <input type="number" wire:model='months' name="months" value="0"
                            class="input input-bordered input-success input-sm bg-white dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                    </div>

                    <div class="px-4 grid content-center col-span-2">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Fecha aprobación
                                C.U.</span>
                        </label>
                        <input wire:model='approbation' name="approbation" type="date" placeholder=""
                            class="input input-bordered input-success input-sm bg-white dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                    <x-input-error for="approbation" />

                    </div>

                    <div class="px-4 grid content-center">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Vencimiento en dias</span>
                        </label>
                        <input wire:model='days' type="number" name="days" value="0"
                            class="input input-bordered input-success input-sm bg-white dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                    </div>
                </div>
            </div>

            <div class="shadow-lg dark:bg-zinc-900 rounded-lg py-4">
                <div class="mt-4">
                    <div class="grid grid-row md:grid-cols-4 dark:bg-zinc-900 rounded-lg mt-4">
                        <div class="px-4 grid content-center col-span-2">
                            <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">Cobertura</span>
                            </label>
                            <select wire:model='coverage_id' name="coverage_id" value="{{ old('id') }}"
                                class="select select-success select-sm bg-white dark:select dark:select-sm">
                                <option selected value=''>...</option>
                                @foreach ($coverages as $id => $name)
                                    <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                        {{ $name }}</option>
                                @endforeach
                            </select>
                    <x-input-error for="coverage_id" />

                        </div>
                        <div class="px-4 grid content-center col-span-2">
                            <label class="label">
                                <span class="label-text text-zinc-900 dark:text-zinc-100">Convenio con:</span>
                            </label>
                            <select wire:model='organization_id' name="organization_id" value="{{ old('id') }}"
                                class="select select-success select-sm bg-white dark:select dark:select-sm">
                                <option selected value=''>...</option>
                                @foreach ($organizations as $id => $name)
                                    <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                        {{ $name }}</option>
                                @endforeach
                            </select>
                    <x-input-error for="organization_id" />

                        </div>


                        {{-- fin de modal --}}
                        <div class="px-4 grid content-center">
                            <button class="flex row items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class="stroke-info flex-shrink-0 w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg> <label class="label">
                                    <span class="label-text text-zinc-900 dark:text-zinc-100">Pais</span>
                                </label></button>
                            <select wire:model='countryid' value="{{ old('id') }}"
                                class="select select-success select-sm bg-white dark:select dark:select-sm">
                                <option selected value=''>...</option>
                                @forelse ($countries as $id => $name)
                                    <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                        {{ $name }}</option>
                                @empty
                                    <option value="">No hay paisess</option>
                                @endforelse
                            </select>
                    <x-input-error for="countryid" />

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
                            <select wire:model='regionid' value="{{ old('id') }}"
                                class="select select-success select-sm bg-white dark:select dark:select-sm">
                                <option selected value=''>...</option>
                                @forelse ($regions as $id => $name)
                                    <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                                @empty
                                    <option value="">No hay Regiones</option>
                                @endforelse
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
                            <select wire:model='provinceid' value="{{ old('id') }}"
                                class="select select-success select-sm bg-white dark:select dark:select-sm">
                                <option selected value=''>...</option>
                                @forelse ($provinces as $id => $name)
                                    <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                                @empty
                                    <option value="">No hay Provincias</option>
                                @endforelse
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
                            <select wire:model="districtid" value="{{ old('id') }}"
                                class="select select-success select-sm bg-white dark:select dark:select-sm">
                                <option selected value=''>...</option>
                                @forelse ($districts as $id => $name)
                                    <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                                @empty
                                    <option value="">No hay distritos</option>
                                @endforelse
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
                            <select wire:model="location" name="location"
                                class="select select-success select-sm bg-white dark:select dark:select-sm">
                                <option selected value=''>...</option>
                                <option>INTERNACIONAL</option>
                                <option>NACIONAL</option>
                                <option>LOCAL</option>
                            </select>
                        <x-input-error for="location" />

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
                            <select wire:model="sector" name="sector"
                                class="select select-success select-sm bg-white dark:select dark:select-sm">
                                <option selected value=''>...</option>
                                <option>PUBLICO</option>
                                <option>PRIVADO</option>
                            </select>
                    <x-input-error for="sector" />

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
                            <select wire:model="organization" name="organization"
                                class="select select-success select-sm bg-white dark:select dark:select-sm">
                                <option selected value=''>...</option>
                                <option>UNIVERSIDAD</option>
                                <option>EMPRESA</option>
                            </select>
                    <x-input-error for="organization" />

                        </div>
                        <div class="px-4 grid content-center">
                        </div>
                    </div>
                </div>
            </div>

            <div class="shadow-lg dark:bg-zinc-900 rounded-lg py-4">
                <div class="p-4 dark:bg-zinc-900 rounded-lg py-4">
                    <div x-data="{ show: true }" class="w-full ">
                        <label for="check-menu" class="flex flex-row  align-middle cursor-pointer w-70px">
                            <input type="checkbox" id="check-menu" class="hidden" x-model="show" />
                            <span class="duration-[400ms] label-text text-zinc-900 dark:text-zinc-200">Seleccionar
                                Responsables</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#1FB2A6" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                            </svg>
                        </label>
                        <div x-show="show"
                            class=" px-4 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-zinc-900 dark:text-zinc-200 grid justify-items-start">
                            <div class="form-control px-2 grid grid-cols-10">
                                @if (sizeof($responsibles) > 0)
                                    @foreach ($responsibles as $id => $name)
                                        <label class="cursor-pointer label">
                                            <input wire:model='responsible' type="checkbox" value="{{ $id }}"
                                                class="checkbox checkbox-xs checkbox-checkbox-info"
                                                name="responsibles[]"{{ is_array(old('responsibles')) && in_array($id, old('responsibles')) ? 'checked' : '' }} />
                                            <span class="label-text px-2  ">{{ $name }}</span>
                                        </label>
                                    @endforeach
                                @endif
                    <x-input-error for="responsible" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shadow-lg dark:bg-zinc-900 rounded-lg py-4">
                <div class="grid content-center p-4 dark:bg-zinc-900 rounded-lg py-4">
                    <span class="label-text text-zinc-900 dark:text-zinc-100 py-2 ">Convenio Escaneado (PDF)</span>
                    <input wire:model='paths' name="paths" id="paths" type="file"
                        class="file-input file-input-xs file-input-bordered file-input-accent w-full max-w-xs bg-zinc-200 dark:bg-zinc-900" />
                </div>
                <x-input-error for="paths" />

            </div>

            <div class="">
                <div class="flex justify-end my-5">
                    <span class="text-xs font-semibold tracking-wide grid content-center">Acciones</span>
                </div>
                <div class="flex justify-end my-5">
                    <button class="mx-4 btn btn-accent btn-sm dark:btn dark:btn-sm">CANCELAR</button>
                    <button wire:click.prevent="store()" class=" btn btn-accent btn-sm dark:btn dark:btn-sm" type="submit">GUARDAR</button>
                </div>
            </div>
    </form>
</div>
