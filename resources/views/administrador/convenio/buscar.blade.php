<x-app-layout>
    <div class="grid content-end my-5 rounded-lg">
        <div class="w-full overflow-x-auto">
            <table class="table-fixed ">
                <thead>
                    <tr
                        class=" text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-900">
                        <th class="px-2 py-2">N°</th>
                        <th class="px-2 py-2 w-1/3 text-center">TÍTULO</th>
                        <th class="px-2 py-2 w-1/5 text-center">RESOLUCIÓN</th>
                        <th class="px-2 py-2 w-1/6 text-center">ESTADO</th>
                        <th class="px-2 py-2 w-1/6 text-center">EXPIRACIÓN</th>
                        <th class="px-2 py-2 w-1/6 text-center">VER CONVENIO</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                    @php
                        $i=1;
                    @endphp
                    @forelse ($resultados as $resultado)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-2 py-2 text-xs">
                            @php
                                echo $i;
                            @endphp
                        </td>
                        <td class="px-2 py-2 text-xs">
                            {{$resultado->title}}
                        </td>
                        <td class="px-2 py-2 text-xs">
                            {{$resultado->resolution}}
                        </td>
                        <td class="px-2 py-2 text-xs">
                            <?php
                            if($resultado->status=='VIGENTE'){
                        ?>
                                <div class="grid justify-items-center px-10 ">
                                    <button
                                       class="px-3 py-1 rounded-md rounded-r-lg cursor-no-drop bg-green-500 shadow-lg shadow-green-500/50 text-gray-100">
                                        Activo
                                    </button>
                                </div>
                        <?php
                            }
                            if($resultado->status=='POR VENCER'){
                        ?>
                                <div class="px-5 grid justify-items-center">
                                    <button
                                        class=" px-2 py-1 rounded-md rounded-r-lg cursor-no-drop bg-red-500 shadow-lg shadow-red-500/50 text-gray-100">
                                            Por vencer
                                    </button>
                                </div>
                        <?php
                            }
                            if($resultado->status=='VENCIDO'){  
                        ?> 
                                <div class="grid justify-items-center px-10 ">
                                    <button
                                        class="px-3 py-1 rounded-md rounded-r-lg cursor-no-drop bg-gray-500 shadow-lg shadow-gray-500/50 text-gray-100">
                                            Vencido
                                    </button>
                                </div>
                        <?php
                            }
                        ?>
                        </td>
                        <td class="px-3 py-3 text-xs text-center">
                            {{$resultado->expiration}}
                        <td class="px-3 py-3 text-center">
                            <div class="space-x-4 text-sm flex justify-center">
                                <a href="{{route('ver.id',$resultado->id)}}"
                                    class="px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                        <path fill-rule="evenodd"
                                            d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @empty
                    <tr>
                        <td colspan="6" style="height: 100px" align="center">No hay Resultados</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

