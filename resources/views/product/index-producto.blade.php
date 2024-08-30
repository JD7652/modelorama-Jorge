<x-app-layout>
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://clubmodelorama.mx/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://laguiadefranquicias.com/wp-content/uploads/2023/10/%C2%BFQue-precio-tiene-una-franquicia-Modelorama.png" class="h-20" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Modelorama</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6"></a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6"></a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6"></a>
                </li>
                <li>
                    <a href="#" class="hover:underline"></a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400"><a href="https://flowbite.com/" class="hover:underline">Jorge del Carmen</a></span>
        <a href="{{ route('producto.create') }}" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
            Crear Producto</a>
    </div>
</footer>


    <br>
    <a href="{{route('producto.index')}}"></a>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripción
                    </th>
                </tr>
            </thead>
            <tbody>


    @foreach ($products as $product )

        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <a href="{{route('producto.show',$product->id)}}">{{$product->name}}</a>
            </th>
            <td class="px-6 py-4">
                {{$product->desc}}
            </td>
            <td class="px-6 py-4">
                {{$product->price}}
            </td>
        </tr>

    @endforeach

</tbody>
</table>
    </div>
    {{$products->links()}}


    <br>
</x-app-layout>