<div>
    <div class="grid grid-cols-1 gap-1 font-light ">
        {{-- para datos 1 --}}
        <form wire:submit.prevent="saveup">
            <div class="shadow-sm bg-white grid grid-rows-2 dark:bg-zinc-900 rounded-sm m-1 px-2 py-1">
                <div class="grid content-center col-span-1">
                    <label class="label">
                        <span
                            class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500 ">Resolución</span>
                    </label>
                    <input wire:model.defer="resolution" type="text" placeholder=""
                        class="input input-bordered input-sm  w-full bg-zinc-200 dark:bg-zinc-800 dark:input dark:input-sm" />
                    <x-input-error for="resolution" />
    
                </div>
                <div class="grid content-center row-span-1 ">
                    <label class="label">
                        <span
                            class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Título</span>
                    </label>
                    <input wire:model='title' type="text" name="title" placeholder=""
                        class="input input-bordered input-sm  w-full bg-zinc-200 dark:bg-zinc-800 dark:input dark:input-sm" />
                    <x-input-error for="title" />
    
                </div>
                <div class="mx-2 grid grid-cols-1 md:row-span-2 w-full " wire:ignore>
                    <label class="label">
                        <span
                            class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Objetivos</span>
                    </label>
                    <textarea wire:model='objetive' name="objetive" id="objetive" placeholder="escribe"></textarea>
                    <x-input-error for="objetive" />
    
                </div>
            </div>
    
            <div class="shadow-sm bg-white  dark:bg-zinc-900 rounded-sm px-2 m-1 py-1">
                <div class="grid grid-row md:grid-cols-4 gap-4">
                    <div class="grid content-center">
                        <label class="label">
                            <span
                                class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Cobertura</span>
                        </label>
                        <select wire:model='coverage_id' name="coverage_id" value="{{ old('id') }}"
                            class="select select-sm bg-zinc-200 dark:bg-zinc-800 dark:select-sm font-light">
                            <option selected value=''>...</option>
                            @foreach ($coverages as $id => $name)
                                <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="coverage_id" />
                    </div>
    
                    <div class="grid content-center">
                        <label class="label">
                            <span
                                class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Categoria</span>
                        </label>
                        <select wire:model='organization_id' name="organization_id" value="{{ old('id') }}"
                            class="select select-sm bg-zinc-200 dark:bg-zinc-800 dark:select-sm font-light w-full">
                            <option selected value=''>...</option>
                            @foreach ($organizations as $id => $name)
                                <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="organization_id" />
                    </div>
    
                    <div class="grid content-center">
                        <label class="label">
                            <span
                                class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Sector</span>
                        </label>
                        <select wire:model="sector" name="sector"
                            class="select select-sm bg-zinc-200 dark:bg-zinc-800 dark:select-sm  font-light">
                            <option selected value=''>...</option>
                            <option>PUBLICO</option>
                            <option>PRIVADO</option>
                        </select>
                        <x-input-error for="sector" />
    
                    </div>
                    <div class=" grid content-center">
                        <label class="label">
                            <span
                                class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Organización</span>
                        </label>
                        <select wire:model="organization" name="organization"
                            class="select select-sm bg-zinc-200 dark:bg-zinc-800 dark:select-sm font-light">
                            <option selected value=''>...</option>
                            <option>UNIVERSIDAD</option>
                            <option>EMPRESA</option>
                        </select>
                        <x-input-error for="organization" />
    
                    </div>
                </div>
            </div>
    
            <div class="shadow-sm bg-white  dark:bg-zinc-900 rounded-sm px-2 m-1 py-1">
                <div class="grid grid-row md:grid-cols-5 gap-4">
                    <div class="grid content-center">
                        <label class="label">
                            <span
                                class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Fecha
                                de
                                suscripción</span>
                        </label>
                        <input wire:model='subscription' name="subscription" type="date" placeholder=""
                            class="input input-bordered input-sm bg-zinc-200 dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                        <x-input-error for="subscription" />
    
                    </div>
                    <div class="grid content-center">
                        <label class="label">
                            <span
                                class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Fecha
                                aprobación
                                C.U.</span>
                        </label>
                        <input wire:model='approbation' name="approbation" type="date" placeholder=""
                            class="input input-bordered  input-sm bg-zinc-200 dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                        <x-input-error for="approbation" />
    
                    </div>
                    {{-- años vencimiento --}}
                    <div class="grid content-center">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100 ">Vencimiento en años</span>
                        </label>
                        <input wire:model='years' type="number" name="years" value="0"
                            class="input input-bordered input-sm bg-zinc-200 dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                        <x-input-error for="years" />
    
                    </div>
                    <div class=" grid content-center">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Vencimiento en mes</span>
                        </label>
                        <input type="number" wire:model='months' name="months" value="0"
                            class="input input-bordered input-sm bg-zinc-200 dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                    </div>
    
                    <div class="grid content-center">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Vencimiento en dias</span>
                        </label>
                        <input wire:model='days' type="number" name="days" value="0"
                            class="input input-bordered input-sm bg-zinc-200 dark:input dark:input-sm dark:bg-zinc-800 w-full" />
                    </div>
                </div>
            </div>
    
            <div class="shadow-sm bg-white  dark:bg-zinc-900 rounded-sm px-2 m-1 py-1">
                <div class="grid grid-row md:grid-cols-5 gap-4">
                    <div class="grid content-center">
                        <label class="label">
                            <span
                                class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Localización</span>
                        </label>
                        <select wire:model="location" name="location"
                            class="select select-sm bg-zinc-200 dark:bg-zinc-800 dark:select-sm font-light">
                            <option selected value=''>...</option>
                            <option>INTERNACIONAL</option>
                            <option>NACIONAL</option>
                            <option>LOCAL</option>
                        </select>
                        <x-input-error for="location" />
    
                    </div>
                    <div class="grid content-center">
                        <label class="label">
                            <span
                                class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Pais</span>
                        </label>
                        <select wire:model='countryid' value="{{ old('id') }}"
                            class="select select-sm bg-zinc-200 dark:bg-zinc-800 dark:select-sm font-light">
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
                    <div class="grid content-center">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Región</span>
                        </label>
                        <select wire:model='regionid' value="{{ old('id') }}"
                            class="select select-sm bg-zinc-200 dark:bg-zinc-800 dark:select-sm font-light">
                            <option selected value=''>...</option>
                            @forelse ($regions as $id => $name)
                                <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @empty
                                <option value="">No hay Regiones</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="grid content-center">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">provincia</span>
                        </label>
                        <select wire:model='provinceid' value="{{ old('id') }}"
                            class="select select-sm bg-zinc-200 dark:bg-zinc-800 dark:select-sm font-light">
                            <option selected value=''>...</option>
                            @forelse ($provinces as $id => $name)
                                <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @empty
                                <option value="">No hay Provincias</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="grid content-center">
                        <label class="label">
                            <span class="label-text text-zinc-900 dark:text-zinc-100">Distrito</span>
                        </label>
                        <select wire:model="districtid" value="{{ old('id') }}"
                            class="select select-sm bg-zinc-200 dark:bg-zinc-800 dark:select-sm font-light">
                            <option selected value=''>...</option>
                            @forelse ($districts as $id => $name)
                                <option value="{{ $id }}"{{ old('id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @empty
                                <option value="">No hay distritos</option>
                            @endforelse
                        </select>
                    </div>
    
                </div>
            </div>
    
            <div class="shadow-sm bg-white dark:bg-zinc-900 rounded-sm m-1 px-2 py-1">
                <div x-data="{ show: true }" class="w-full px-3 ">
                    <div class=" ">
                        <label for="check-menu" class="  align-middle cursor-pointer w-full flex justify-between">
                            <input type="checkbox" id="check-menu" class="hidden" x-model="show" />
                            <span
                                class="duration-[400ms] label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500">Seleccionar
                                Responsables</span>
    
                            <button @click="show = ! show" class="w-6 h-6 text-lg">
                                <svg x-show="show" class="text-zinc-400 dark:text-zinc-600"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-.53 14.03a.75.75 0 001.06 0l3-3a.75.75 0 10-1.06-1.06l-1.72 1.72V8.25a.75.75 0 00-1.5 0v5.69l-1.72-1.72a.75.75 0 00-1.06 1.06l3 3z"
                                        clip-rule="evenodd" />
                                </svg>
    
                                <svg x-show="!show" class="text-zinc-400 dark:text-zinc-600"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm.53 5.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l1.72-1.72v5.69a.75.75 0 001.5 0v-5.69l1.72 1.72a.75.75 0 101.06-1.06l-3-3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
    
                        </label>
    
                    </div>
                    <div x-show="show" class="space-y-6 overflow-hidden dark:bg-zinc-900 dark:text-zinc-100 ">
                        <div class="form-control px-2 grid-cols-3 md:grid-cols-10 grid justify-items-start">
                            @if (sizeof($responsibles) > 0)
                                @foreach ($responsibles as $id => $name)
                                    <label class="cursor-pointer label">
                                        <input wire:model.defer='responsible' type="checkbox" value="{{ $id }}"
                                            class="checkbox checkbox-xs checkbox-info text-white dark:checkbox-warning       "
                                            name="responsibles[]"{{ is_array(old('responsibles')) && in_array($id, old('responsibles')) ? 'checked' : '' }} />
                                        <span
                                            class="label-text px-1 text-zinc-700 dark:text-zinc-400">{{ $name }}</span>
                                    </label>
                                @endforeach
                            @endif
                            <x-input-error for="responsible" />
    
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="shadow-sm bg-white dark:bg-zinc-900 rounded-sm m-1 px-2 font-light py-1">
                <div class="grid content-center px-3 dark:bg-zinc-900 rounded-lg">
                    <span
                        class="label-text text-zinc-900 dark:text-zinc-100 after:content-['*'] after:ml-0.5 after:text-red-500 mb-1">Convenio
                        Escaneado (PDF)</span>
                    <input wire:model='paths' name="paths" id="paths" type="file"
                        class="file-input file-input-xs file-input-info dark:file-input-warning w-full max-w-xs bg-zinc-200 dark:bg-zinc-800 text-xs font-light" />
                   
                </div>
                <x-input-error for="paths" />
    
            </div>
    
            <div class="mx-1">
                <div  wire:loading.remove wire:target="paths" class="flex justify-end my-5">
                    {{-- <button
                        class="mx-4 btn btn-warning btn-sm dark:btn text-white dark:btn-sm dark:btn-outline dark:btn-warning">CANCELAR</button> --}}
                    <button
                    class=" btn btn-info text-white btn-xs dark:btn-error"
                    type="submit" wire:loading.class="bg-blue-300" wire:target="saveup()">GUARDAR CAMBIOS</button>
                </div>

            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/basic/ckeditor.js"></script>
    <script>
        $(document).ready(function(){
            CKEDITOR.instances['objetive'].setData('objetive');
        })
        $(document).ready(function(){
            const editor = CKEDITOR.replace('objetive');
            editor.on('change',function(event){
                console.log(event.editor.getData())
                @this.set('objetive',event.editor.getData());
            })
        })
    </script>
</div>
