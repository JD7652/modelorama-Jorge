<x-app-layout>
    <div class="flex justify-center items-center min-h-screen">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nombre: </h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-500 dark:text-white">{{$productDetail->name}}</h5>
            </a>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Descripción: </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$productDetail->desc}}</p>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Precio: </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">${{$productDetail->price}}</p>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Número de Prodcuto:</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$productDetail->product_number}}</p>
            <a href="{{route('producto.edit', $productDetail)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Editar
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>

            <form action="{{route('producto.destroy', $productDetail)}}" method="POST">
                @csrf
                @method('delete')
                <br>
                <button type="submit" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Eliminar
                </button>
            </form>

            <br>
            
            <a href="{{ route('producto.index') }}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                << Regresar
            </a>
        
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.querySelector('button[type="submit"]').addEventListener('click', function(event) {
        event.preventDefault(); 
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás arrepentirte!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, elimínalo, porfa :)',
            cancelButtonText: 'Mejor no,ya me arrepentí :('
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.closest('form').submit(); 
            }
        });
    });
    </script>
</x-app-layout>



{{-- <form id="delete-form" action="{{ route('producto.destroy', $product) }}" method="POST">
    @csrf
    @method('delete')
    <button type="button" id="delete-button" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400">
        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            Eliminar
        </span>
    </button>
</form> --}}




