<div class="bg-white dark:bg-zinc-900 h-screen">
<div class=" min-h-screen container mx-auto ">
    @foreach ($agreement as $agree)
    <div class="">
        <div class="flex justify-start my-5">
            <button class=" btn btn-accent btn-sm dark:btn dark:btn-sm">VOLVER</button>
        </div>
    </div>
    <div class="grid grid-rows-1 bg-zinc-100 dark:bg-zinc-800 rounded-lg shadow-lg p-4">
        
        <div>
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>RESOLUCION</b></span>
            <p class="label-text text-zinc-800 dark:text-zinc-400">{{$agree->resolution}}</p>
        </div>
        <div>
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>TITULO</b></span>
            <p class="label-text text-zinc-800 dark:text-zinc-400">{{$agree->title}}</p>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>OBJETIVOS</b></span>
            <div class="text-sm">{!! html_entity_decode($agree->objetive)!!}</div>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>FECHA DE SUSCRIPCIÓN</b></span>
            <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agree->subscription}}</span>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>FECHA DE EXPIRACIÓN</b></span>
            <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agree->expiration}}</span>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>AÑOS DE VIGENCIA</b></span>
            <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agree->years}}<span
                    class="text-zinc-800 dark:text-zinc-400"> Años</span></span>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>RESPOSABLES</b></span>
            <ol class="px-4 list-decimal">

                @foreach ($agree->responsibles as $resp)
                <li class="label-text text-zinc-800 dark:text-zinc-400">
                    {{$resp->description}}
                </li>
                @endforeach
            </ol>
        </div>
        
    </div>
    <div class="">
        <div class="flex justify-end my-5">
            <span class="text-xs font-semibold tracking-wide grid content-center">Acciones</span>
        </div>
        <a target="_blank" href='https://storage-ariel.s3.amazonaws.com/{{$agree->path}}'>PDF</a>
        <div class="flex justify-end my-5">
            <button wire:click="descargar('{{$agree->path}}')" class=" btn btn-accent btn-sm dark:btn dark:btn-sm">DESCARGAR CONVENIO</button>
        </div>
    </div>
@endforeach
</div>
</div>
