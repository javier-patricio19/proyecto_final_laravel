<x-nav />

<div id="main">
    <div>
        <img class="object-contain h-96" src="{{ Auth::user()->imagen }}" alt="">
    </div>
    <div class="flex flex-col align-items-start">
        <form method="POST" action="{{ route('modificarCuenta') }}" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
                <label class="w-20" for="nombre">Nombre</label>
                <input class="w-60" type="text" id="nombre" name="nombre" value="{{ Auth::user()->name }}"
                    disabled>
                <button id="btn-img" type="button"
                    onclick="editar('nombre', 'btn-img', '{{ Auth::user()->name }}')">Editar</button>
            </div>
            <div class="mt-4">
                <label class="w-20" for="correo">Correo</label>
                <input class="w-60" type="email" id="correo" name="correo" value="{{ Auth::user()->email }}"
                    disabled>
                <button id="btn-correo" type="button"
                    onclick="editar('correo', 'btn-correo', '{{ Auth::user()->email }}')">Editar</button>
            </div>
            <div class="mt-4">
                <label for="imagen">Cambiar Imagen</label>
                <input type="file" name="imagen" id="imagen">
            </div>
            <div class="w-full mt-24 flex flex-row align-items-center justify-between uppercase">
                <button
                    class="bg-green-800 hover:bg-green-900 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase"
                    type="submit">Guardar Cambios</button>
                <a class="inline-block text-red-800 hover:text-red-900" href="{{ route('index') }}">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<x-footer />

<script>
    function editar(input, btn, valor_anterior) {
        document.getElementById(input).disabled = false
        document.getElementById(input).focus()
        document.getElementById(input).select()
        document.getElementById(btn).style.color = "red"
        document.getElementById(btn).innerHTML = "Cancelar"
        document.getElementById(btn).setAttribute("onclick", "cancelar('" + input + "', '" + valor_anterior +
            "', '" +
            btn + "')")
    }

    function cancelar(input, valor_anterior, btn) {
        document.getElementById(input).disabled = true
        document.getElementById(input).value = valor_anterior;
        document.getElementById(btn).style.color = "black"
        document.getElementById(btn).innerHTML = "Editar"
        document.getElementById(btn).setAttribute("onClick", "editar('" + input + "', '" + btn +
            "', '" + valor_anterior + "')")
    }
</script>
