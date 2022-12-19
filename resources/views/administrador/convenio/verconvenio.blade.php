<x-app-layout>
    <style>
        ul,li,ol{
            list-style-type: disc;
            margin-left: 1%;
        }
    </style>
    {{-- <div class="">
        <div class="flex justify-start my-5">
            <button class=" btn btn-info text-white btn-sm dark:btn dark:btn-sm">VOLVER</button>
        </div>
    </div> --}}
    <div class="grid grid-rows-1 dark:bg-zinc-900 rounded-lg  p-4 bg-white shadow-lg font-light text-sm">
        <div>
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>RESOLUCION: </b></span>
            <p class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->resolution}}</p>
        </div>
        <div>
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>TITULO: </b></span>
            <p class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->title}}</p>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>OBJETIVOS: </b></span>
            <div class="text-xs">{!! html_entity_decode($agreement[0]->objetive)!!}</div>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>FECHA DE SUSCRIPCIÓN: </b></span>
            <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->subscription}}</span>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>FECHA DE EXPIRACIÓN: </b></span>
            <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->expiration}}</span>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>AÑOS DE VIGENCIA: </b></span>
            <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->years}}<span
                    class="text-zinc-800 dark:text-zinc-400"> Años</span></span>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100"><b>RESPONSABLES: </b></span>
            <ol class="px-4 list-decimal">
                @foreach ($agreement[0]->responsibles as $responsible)
                <li class="label-text text-zinc-800 dark:text-zinc-400">
                    {{$responsible->description}}
                </li>
                @endforeach
            </ol>
        </div>
    </div>


    <div class="">
        <div class="flex justify-end my-5">
            <a target="_blank" href="{{route('descarga.path',$agreement[0]->id)}}" class=" btn btn-info text-white btn-sm dark:btn-outline dark:btn-info">DESCARGAR CONVENIO</a>
        </div>
    </div>
</x-app-layout>
