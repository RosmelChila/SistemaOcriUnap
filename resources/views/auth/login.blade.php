<x-guest-layout>
    <div class="hero min-h-screen bg-white dark:bg-zinc-900 font-light">
        <div class="hero-content flex-col md:flex-row-reverse">
            <div class="card flex-shrink-0 w-full max-w-sm shadow-sm bg-zinc-100 dark:bg-zinc-800 p-10">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mt-4">
                        <label class="block" for="email" value="{{ __('Email') }}">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-zinc-800 dark:text-zinc-200 py-1">
                                Correo
                            </span>
                            <input type="email" id="email" name="email" placeholder="Email"
                                :value=""
                                class="input dark:input w-full bg-zinc-200 dark:bg-zinc-800  text-xs" />
                        </label>
                        <x-input-error for="email" />

                    </div>
                    <div class="mt-4">
                        <label class="block" for="password" value="{{ __('password') }}">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-zinc-800 dark:text-zinc-200 py-1">
                                Contraseña
                            </span>
                            <input type="password" id="password" name="password" placeholder="password"
                                :value=""
                                class="input dark:input w-full bg-zinc-200 dark:bg-zinc-800 text-xs" />
                        </label>
                        <x-input-error for="password" />

                    </div>
                    <div class="mt-4 flex items-center  ">
                        <div class="form-control">
                            <label for="remember_me" class="label cursor-pointer">
                                <input id="remember_me" type="checkbox"
                                    class="checkbox checkbox-info checkbox-xs dark:checkbox dark:checkbox-xs "
                                    name="remember" />
                                <span class="label-text px-5">Recordame</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end">
                        <button class="bg-teal-600 dark:bg-btn-inicio px-2 p-1 rounded-md text-white text-sm ">INGRESAR</button>
                    </div>
                </form>
            </div>
            <div class="text-center text-zinc-800 dark:text-white">
                <h1 class="text-5xl font-bold">OCRI - UNA</h1>
                <p class="py-6">Oficina de Cooperación y Relaciones Internacionales</p>
            </div>

        </div>


    </div>


</x-guest-layout>
