<x-app-layout>
    <div>
        
        <div class=" w-full md:w-52 grid  justify-center">
            <span class="px-5 text-xs mt-4">Agregar ubicación</span>
            @livewire('datos.crearpais')
            @livewire('crearegion-component')
            @livewire('crearprovincia-component')
            @livewire('creardistrito-component')
        </div>
        <div class="w-full md:w-52 grid  justify-center ">
            <span class="px-5 text-xs mt-4">Agregar datos</span>
            @livewire('datos.crearcobertura')
            @livewire('crearcategoria-component')
            @livewire('crearesponsable-component')
        </div>
        <p>hola</p>
    </div>
</x-app-layout>

