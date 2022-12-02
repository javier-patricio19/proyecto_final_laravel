<x-nav/>

  <div class="flex flex-row justify-center align-items-center mt-16">
  
  @foreach ($paquetes as $paquete)
  <div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="{{asset($paquete->imagen)}}" alt="Sunset in the mountains">
    <div class="px-2 py-4">
      <div class="font-bold text-xl mb-4">{{ $paquete->nombre }}</div>
      <p class="text-gray-900 text-base">
        <p>{{ $paquete->descripcion }}</p>
        <p></p>
      </p>
    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $paquete->tags }}</span>
    </div>
  </div>
  @endforeach

  @if (Auth::user() != null && Auth::user()->tipo == 1)
    <div class="flex align-items-center justify-center">
      <a class="h-8" href="{{route('registrarPaquete')}}">Nuevo paquete</a>
    </div>
  @endif
  </div>






<x-footer/>








