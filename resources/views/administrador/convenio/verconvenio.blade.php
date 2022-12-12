<x-app-layout>
    <div class="">
        <div class="flex justify-start my-5">
            <button class=" btn btn-accent btn-sm dark:btn dark:btn-sm">VOLVER</button>
        </div>
    </div>
    <div class="grid grid-rows-1 dark:bg-zinc-900 rounded-lg  p-4">
        <div>
            <span class="label-text text-zinc-900 dark:text-zinc-100">Resolución</span>
            <p class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->resolution}}</p>
        </div>
        <div>
            <span class="label-text text-zinc-900 dark:text-zinc-100">Tìtulo</span>
            <p class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->title}}</p>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100">Objetivos</span>
            <p class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->objetive}}</p>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100">Fecha de suscripción</span>
            <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->subscription}}</span>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100">Fecha de expiración</span>
            <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->expiration}}</span>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100">Años de vigencia</span>
            <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agreement[0]->years}}<span
                    class="text-zinc-800 dark:text-zinc-400"> Años</span></span>
        </div>
        <div class="py-4 md:col-span-2">
            <span class="label-text text-zinc-900 dark:text-zinc-100">Responsables</span>
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
            <span class="text-xs font-semibold tracking-wide grid content-center">Acciones</span>
        </div>
        <div class="flex justify-end my-5">
            <button class=" btn btn-accent btn-sm dark:btn dark:btn-sm">DESCARGAR CONVENIO</button>
        </div>
    </div>
</x-app-layout>
