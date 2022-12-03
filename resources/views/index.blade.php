<x-nav />


<div class=" mt-16 h-full">
    <div class="flex flex-row justify-center align-items-center">
        @foreach ($paquetes as $paquete)
            <div class="max-w-sm rounded overflow-hidden shadow-lg mr-10 hover:scale-105">
                <img class="w-full" src="{{ asset($paquete->imagen) }}" alt="Sunset in the mountains">
                <div class="px-2 py-4">
                    <div class="font-bold text-xl mb-4">{{ $paquete->nombre }}</div>
                    <p class="text-gray-900 text-base">
                    <p>{{ $paquete->descripcion }}</p>
                    <p></p>
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $paquete->tags }}</span>
                    <a href="{{ route('eliminarPaquete', $paquete->id) }}"
                        class="ml-12 hover:text-orange-700">Eliminar</a>
                </div>
            </div>
        @endforeach

        @if (Auth::user() != null && Auth::user()->tipo == 1)
            <div class="flex align-items-center justify-center h-full">
                <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-4 px-4 rounded inline-flex items-center"
                    href="{{ route('registrarPaquete') }}"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="-4.5 -4.5 24 24" width="24" fill="currentColor">
                        <path d="M8.9 6.9v-5a1 1 0 1 0-2 0v5h-5a1 1 0 1 0 0 2h5v5a1 1 0 1 0 2 0v-5h5a1 1 0 1 0 0-2h-5z">
                        </path>
                    </svg></a>
            </div>
        @endif
    </div>
</div>






<x-footer />
