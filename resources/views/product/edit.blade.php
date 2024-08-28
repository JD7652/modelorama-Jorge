<x-app-layout>
    <div class="mt-8">
        <form action="{{ route('producto.update', $product)}}" method="POST" class="max-w-sm mx-auto">
            @csrf
            @method('put')
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                    Producto</label>
                <input type="text" id="name" name="name" value="{{$product->name}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marca</label>
                <input type="text" id="branch" name="branch" value="{{$product->branch}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de
                    Producto</label>
                <input type="text" id="product_number" name="product_number" value="{{$product->product_number}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
                <input type="text" id="price" name="price" value="{{$product->price}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="message"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                <textarea id="desc" name="desc" rows="5"
                {{$product->desc}}
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Descripción del producto..."></textarea>
            </div>
            <div class="mb-5">
                <button type="submit" class="text-white bg-purple-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Actualizar Formulario</button>
            </div>
        </form>
    </div>
</x-app-layout>