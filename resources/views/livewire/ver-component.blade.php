<div class=" bg-inicio dark:bg-zinc-900  ">
    @livewireStyles
    <section class="grid px-[10%] py-[3%]">

        <img src="/img/Ellipse.png" class="z-20 animate-ping w-4 absolute left-24 top-56" />
        <img src="/img/Ellipse.png" class="z-20 animate-ping w-6 absolute right-96 top-36" />
        <img src="/img/Ellipse.png" class="z-20 animate-ping w-6 absolute left-64 bottom-24" />
        <img src="/img/Ellipse.png" class="z-20 animate-ping w-6 absolute right-40 top-64" />

        <div class="grid grid-cols-1 md:grid-cols-1 ">
            <div class=" grid justify-items-center">
                <p class="py-2 text-white ">Visualización de la información de convenio</p>
            </div>

            <div class=" min-h-screen container mx-auto ">
                @foreach ($agreement as $agree)
                <div class="grid grid-rows-1 bg-zinc-100 dark:bg-zinc-800 rounded-lg shadow-lg p-4">

                    <div>
                        <span class="label-text text-btn-inicio text-xs dark:text-zinc-100"><b>RESOLUCION</b></span>
                        <p class="label-text text-zinc-800 dark:text-zinc-400">{{$agree->resolution}}</p>
                    </div>
                    <div>
                        <span class="label-text text-btn-inicio text-xs dark:text-zinc-100"><b>TITULO</b></span>
                        <p class="label-text text-zinc-800 dark:text-zinc-400">{{$agree->title}}</p>
                    </div>
                    <div class="py-4 md:col-span-2">
                        <span class="label-text text-btn-inicio text-xs dark:text-zinc-100"><b>OBJETIVOS</b></span>
                        <div class="text-sm font-light text-zinc-800 dark:text-zinc-400">{!! html_entity_decode($agree->objetive)!!}</div>
                    </div>
                    <div class="py-4 md:col-span-2">
                        <span class="label-text text-btn-inicio text-xs dark:text-zinc-100"><b>FECHA DE SUSCRIPCIÓN</b></span>
                        <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agree->subscription}}</span>
                    </div>
                    <div class="py-4 md:col-span-2">
                        <span class="label-text text-btn-inicio text-xs dark:text-zinc-100"><b>FECHA DE EXPIRACIÓN</b></span>
                        <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agree->expiration}}</span>
                    </div>
                    <div class="py-4 md:col-span-2">
                        <span class="label-text text-btn-inicio text-xs dark:text-zinc-100"><b>AÑOS DE VIGENCIA</b></span>
                        <span class="label-text text-zinc-800 dark:text-zinc-400">{{$agree->years}}<span
                                class="text-zinc-800 dark:text-zinc-400"> Años</span></span>
                    </div>
                    <div class="py-4 md:col-span-2">
                        <span class="label-text text-btn-inicio text-xs dark:text-zinc-100"><b>RESPOSABLES</b></span>
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
                        <a target="_blank" href="{{route('descarga.path',$agree->id)}}" class="bg-btn-inicio px-2 p-1 rounded-md text-white text-sm ">DESCARGAR CONVENIO</a>
                    </div>
                </div>
            @endforeach
            </div>



        @livewireScripts

    </section>
</div>

