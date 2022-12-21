<x-app-layout>
    <div align='center'>
        <div class=" w-full md:w-52 grid  justify-center">
            <span class="px-5 text-xs mt-4">Agregar ubicación</span>
            <div>@livewire('datos.crearpais')</div>
            <div>@livewire('crearegion-component')</div>
            <div>@livewire('crearprovincia-component')</div>
            <div>@livewire('creardistrito-component')</div>
        </div>
        <div class="w-full md:w-52 grid  justify-center ">
            <span class="px-5 text-xs mt-4">Agregar datos</span>
            <div>@livewire('datos.crearcobertura')</div>
            <div>@livewire('crearcategoria-component')</div>
            <div>@livewire('crearesponsable-component')</div>
            
        </div>
    </div>
</x-app-layout>

