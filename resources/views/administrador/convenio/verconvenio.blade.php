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


    <form>

        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
            <option disabled selected>...</option>
            <option type="text" name="interesado" value="no" id="interesadoPositivo">Peru</option>
            <option type="text" name="interesado" value="si" id="interesadoNegativo">Argentina</option>
        </select>
        {{-- <p>
            ¿Interesado en recibir email?
        </p>
        <p>
            <select name="" id=""></select>
            <input type="text" name="interesado" value="si" id="interesadoPositivo" checked>peru
            <input type="text" name="interesado" value="no" id="interesadoNegativo">otro
        </p>
        <p> --}}

            <select id="emailInput" class="select select-success select-sm bg-white dark:select dark:select-sm">
                <option disabled selected>...</option>
                <option type="text" name="interesado" value="no" id="interesadoPositivo">Puno</option>
                <option type="text" name="interesado" value="si" id="interesadoNegativo">Cusco</option>
            </select>
            {{-- <input type="text" name="email" placeholder="Escribe tu email"> --}}
        {{-- </p> --}}



        <select class="select select-success select-sm bg-white dark:select dark:select-sm">
            <option disabled selected>...</option>
            <option type="text" name="interesado" value="no" id="regionpuno">Puno</option>
            <option type="text" name="interesado" value="si" id="nopuno">cusco</option>
        </select>
    </form>


    <form name="f1">
        <select name=pais onchange="cambia_provincia()">
        <option value="0" selected>Seleccione...
        <option value="1">España
        <option value="2">Argentina
        <option value="3">Colombia
        <option value="4">Francia
        </select>

        <select name=provincia>
        <option value="-">-
        </select>
      </form>


      <script>
      var provincias_1=new Array("-","Andalucía","Asturias","Baleares","Canarias","Castilla y León","Castilla-La Mancha","...");
      var provincias_2=new Array("-","Salta","San Juan","San Luis","La Rioja","La Pampa","...");
      var provincias_3=new Array("-","Cali","Santamarta","Medellin","Cartagena","...");
      var provincias_4=new Array("-","Aisne","Creuse","Dordogne","Essonne","Gironde ","...");

      var todasProvincias = [
        [],
        provincias_1,
        provincias_2,
        provincias_3,
        provincias_4,
      ];

      function cambia_provincia(){
           //tomo el valor del select del pais elegido
           var pais
           pais = document.f1.pais[document.f1.pais.selectedIndex].value
           //miro a ver si el pais está definido
           if (pais != 0) {
              //si estaba definido, entonces coloco las opciones de la provincia correspondiente.
              //selecciono el array de provincia adecuado
              mis_provincias=todasProvincias[pais]
              //calculo el numero de provincias
              num_provincias = mis_provincias.length
              //marco el número de provincias en el select
              document.f1.provincia.length = num_provincias
              //para cada provincia del array, la introduzco en el select
              for(i=0;i<num_provincias;i++){
                 document.f1.provincia.options[i].value=mis_provincias[i]
                 document.f1.provincia.options[i].text=mis_provincias[i]
              }
           }else{
              //si no había provincia seleccionada, elimino las provincias del select
              document.f1.provincia.length = 1
              //coloco un guión en la única opción que he dejado
              document.f1.provincia.options[0].value = "-"
              document.f1.provincia.options[0].text = "-"
           }
           //marco como seleccionada la opción primera de provincia
           document.f1.provincia.options[0].selected = true
    }

      </script>

    <script>
        var emailInput = document.getElementById('emailInput');

        // evento para el input radio del "si"
        document.getElementById('interesadoPositivo').addEventListener('click', function(e) {
            console.log('Vamos a habilitar el input text');
            emailInput.disabled = false;
        });
        document.getElementById('interesadoNegativo').addEventListener('click', function(e) {
            console.log('Vamos a deshabilitar el input text');
            emailInput.disabled = true;
        });
    </script>
</x-app-layout>
