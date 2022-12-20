<div>
    <div class="container grid grid-cols-2 gap-1 mx-auto px-6">
        <div class="flex justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path d="M16.881 4.346A23.112 23.112 0 018.25 6H7.5a5.25 5.25 0 00-.88 10.427 21.593 21.593 0 001.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.592.772-2.468a17.116 17.116 0 01-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0018 11.25c0-2.413-.393-4.735-1.119-6.904zM18.26 3.74a23.22 23.22 0 011.24 7.51 23.22 23.22 0 01-1.24 7.51c-.055.161-.111.322-.17.482a.75.75 0 101.409.516 24.555 24.555 0 001.415-6.43 2.992 2.992 0 00.836-2.078c0-.806-.319-1.54-.836-2.078a24.65 24.65 0 00-1.415-6.43.75.75 0 10-1.409.516c.059.16.116.321.17.483z" />
            </svg>
              <span class="px-5 text-xs font-light">CONVENIOS POR VENCER</span>
        </div>
        {{-- <div class="mb-4 text-sm font-semibold text-zinc-400 dark:text-zinc-300 flex justify-start">Usuarios registrados</div> --}}

        <div class="flex justify-end my-2">
            <a  target="_blank" href="" wire:click='genpdf' class="shadow-lg btn btn-info btn-xs text-zinc-100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mx-2">
                <path d="M10 2a.75.75 0 01.75.75v5.59l1.95-2.1a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0L6.2 7.26a.75.75 0 111.1-1.02l1.95 2.1V2.75A.75.75 0 0110 2z" />
                <path d="M5.273 4.5a1.25 1.25 0 00-1.205.918l-1.523 5.52c-.006.02-.01.041-.015.062H6a1 1 0 01.894.553l.448.894a1 1 0 00.894.553h3.438a1 1 0 00.86-.49l.606-1.02A1 1 0 0114 11h3.47a1.318 1.318 0 00-.015-.062l-1.523-5.52a1.25 1.25 0 00-1.205-.918h-.977a.75.75 0 010-1.5h.977a2.75 2.75 0 012.651 2.019l1.523 5.52c.066.239.099.485.099.732V15a2 2 0 01-2 2H3a2 2 0 01-2-2v-3.73c0-.246.033-.492.099-.73l1.523-5.521A2.75 2.75 0 015.273 3h.977a.75.75 0 010 1.5h-.977z" />
              </svg>IMPRIMIR</a>

        </div>
    </div>

    <div class="container grid px-6 mx-auto shadow-lg bg-white dark:bg-zinc-900 rounded-lg">
        <div class="w-full overflow-hidden">
            <div class="w-full overflow-x-auto">
                <table class="table-fixed ">
                    <thead>
                        <tr
                            class=" text-xs font-semibold tracking-wide text-left text-zinc-500 uppercase border-b dark:border-zinc-700 bg-zinc-50 dark:text-zinc-400 dark:bg-zinc-900">
                            <th class="px-2 py-2">N°</th>
                            <th class="px-2 py-2 w-1/3 text-center">TÍTULO</th>
                            <th class="px-2 py-2 w-1/5 text-center">RESOLUCIÓN</th>
                            <th class="px-2 py-2 w-1/6 text-center">ESTADO</th>
                            <th class="px-2 py-2 w-1/6 text-center">EXPIRACIÓN</th>
                            <th class="px-2 py-2 w-1/6 text-center">VER CONVENIO</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white  dark:divide-zinc-700 dark:bg-zinc-900">
                        @php
                            $i=1;
                        @endphp
                        @foreach ($expirate as $expire)
                        <tr class="text-zinc-700 dark:text-zinc-400">
                            <td class="px-2 py-2 text-xs">
                                @php
                                    echo $i;
                                @endphp
                            </td>
                            <td class="px-2 py-2 text-xs">
                                {{$expire->title}}
                            </td>
                            <td class="px-2 py-2 text-xs">
                                {{$expire->resolution}}
                            </td>
                            <td class="px-2 py-2 text-xs">
                                <?php
                                if($expire->status=='VIGENTE'){
                            ?>
                                    <div class="grid justify-items-center px-10 ">
                                        <span class="bg-green-600 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">vigente</span>
                                    </div>
                            <?php
                                }
                                if($expire->status=='POR VENCER'){
                            ?>
                                    <div class="px-5 grid justify-items-center">
                                        <span class="bg-red-500 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">Por vencer</span>
                                    </div>
                            <?php
                                }
                                if($expire->status=='VENCIDO'){
                            ?>
                                     <div class="px-5 grid justify-items-center">
                                        <span class="bg-zinc-600 text-zinc-100 px-4 py-1 rounded-lg shadow-lg">Vencido</span>
                                    </div>
                            <?php
                                }
                            ?>
                            </td>
                            <td class="px-3 py-3 text-xs text-center">
                                {{$expire->expiration}}
                            <td class="px-3 py-3 text-center grid justify-items-center">
                                <div class="space-x-4 text-sm">
                                    <a href="{{route('ver.id',$expire->id)}}"
                                        class="px-2 py-2 text-sm font-medium leading-5 text-sky-600 rounded-lg dark:text-zinc-400 focus:outline-none focus:shadow-outline-zinc"
                                        aria-label="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" class="w-5 h-5">
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
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- para paginación --}}
            {{$expirate->links()}}
        </div>
    </div>
</div>
