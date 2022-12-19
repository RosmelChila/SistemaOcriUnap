<div class="">
    <span class="px-5 text-xs mt-4">Agregar ubicación</span>
    <div class=" w-full md:w-52 grid  justify-center">
        @livewire('datos.crearpais')
        @livewire('crearegion-component')
        @livewire('crearprovincia-component')
        @livewire('creardistrito-component')
    </div>

    <span class="px-5 text-xs mt-4">Agregar datos</span>

    <div class="w-full md:w-52 grid  justify-center ">
        @livewire('datos.crearcobertura')
        @livewire('crearcategoria-component')
        @livewire('crearesponsable-component')
    </div>
</div>

