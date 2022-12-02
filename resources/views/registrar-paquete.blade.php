<x-nav />

<div class="md:p-12 md:mx-6 w-1/3">
    <form method="POST" action="{{ route('registrarPaquete') }}">
        @csrf

        <div class="mt-4">
            <x-input-label for="nombre" :value="__('Nombre')" />

            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" required autofocus />
        </div>

        <div class="mt-4">
            <x-input-label for="descripcion" :value="__('Descripcion')" />

            <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" required
                autofocus />
        </div>

        <div class="mt-4">
            <x-input-label for="tags" :value="__('Tags')" />

            <x-text-input id="tags" class="block mt-1 w-full" type="text" name="tags" required autofocus />
        </div>

        <div class="mt-4">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" id="imagen">
        </div>

        <div class="mt-4">
            <x-primary-button class="ml-3">
                {{ __('Aceptar') }}
            </x-primary-button>
        </div>
    </form>
</div>
