<x-app-layout>
    <div class="container mx-4 flex flex-col md:flex-row ">
        <div class=" basis-1/4">
            <table class="w-full bg-white shadow-xs dark:bg-gray-900 p-10 ">
                <thead>
                    <tr>
                        <th class="p-4">PAIS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-1 text-center">Argentina</td>
                    </tr>
                    <tr>
                        <td class="py-1 text-center">Argentina</td>
                    </tr>
                    <tr>
                        <td class="py-1 text-center">Argentina</td>
                    </tr>
                    <tr>
                        <td class="py-1 text-center">Argentina</td>
                    </tr>
                    <tr>
                        <td class="py-1 text-center">Argentina</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class=" basis-full md:mx-4  sm:my-4 ">
            <table class="w-full bg-white shadow-xs dark:bg-gray-900">
                <thead class="">
                    <tr class=" text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
                        <th class="py-1 px-3 text-center">N°</th>
                        <th class="py-1 px-2 text-center">NOMBRE CONVENIO</th>
                        <th class="py-1 px-2 text-center">RESOLUCIÓN</th>
                        <th class="py-1 px-2 text-center">ESTADO</th>
                        <th class="py-1 px-2 text-center">FECHA DE EXPIRACIÓN</th>
                        <th class="py-1 px-2 text-center">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-1 text-center">1</td>
                        <td class="py-1">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, corrupti!adipisicing sfsfsfsfasfsfsfelit. Similique, vero.</td>
                        <td class="py-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                        <td class="py-1 text-center">estado1</td>
                        <td class="py-1 text-center">12/23/3232</td>
                        <td class="py-1 text-center">-</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div x-data="{open : false}">
        <button @click="open = true" class="bg-white text-black">prueba modal</button>
        <div x-transition x-show="open" class="">
            <div class="p-6 w-1/2 bg-blue-500 shodow-md">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae cumque officia perferendis aperiam labore cum, in ipsa maiores, veritatis nam aliquid hic, saepe dolore nulla libero temporibus rerum? Eligendi, doloribus?</p>
                <button class="bg-blue">enviart</button>
                <button @click="open = false" class="bg-red">cancelar</button>
            </div>
        </div>
    </div>
</x-app-layout>
