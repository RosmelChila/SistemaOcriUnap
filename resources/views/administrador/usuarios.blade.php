<x-app-layout>
    <div class="flex justify-start py-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
          </svg>
          <span class="px-5 text-sm">USUARIOS REGISTRADOS</span>
    </div>

    {{-- cuadro de usuarios es responsibe ahhh jajaj--}}
    <div class="grid grid-rows-1 gap-4 justify-center md:grid-cols-4">
        @foreach ($users as $user)
        {{-- para foto y datos de usuario --}}
        <div class="md:basis-1/3 mx-4 max-w-sm p-6 space-y-6 overflow-hidden rounded-lg shadow-md dark:bg-zinc-900 dark:text-zinc-100">
            <div class="flex space-x-4">
                {{-- esta imagen cambia aletriamente icono si no logras filtrar img eso no mas queda --}}
                <img alt="" src="https://source.unsplash.com/100x100/?portrait" class="object-cover w-12 h-12 rounded-full shadow dark:bg-zinc-500">
                <div class="flex flex-col space-y-1">
                    <a rel="noopener noreferrer" href="#" class="text-sm font-semibold">{{$user->name}}</a>
                    <span class="text-xs dark:text-zinc-400">{{$user->email}}</span>
                </div>
            </div>
            {{-- botones para eliminar y editar --}}
            <div class="flex flex-wrap justify-between">
                <div class="space-x-2">
                </div>
                <div class="flex space-x-2 text-sm dark:text-zinc-400">
                    <button type="button" class="flex items-center p-1 space-x-1.5">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                            </path>
                        </svg>
                    </button>
                    <button type="button" class="flex items-center p-1 space-x-1.5">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20 ">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
      </div>

</x-app-layout>
