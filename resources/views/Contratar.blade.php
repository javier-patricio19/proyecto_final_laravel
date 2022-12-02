<x-nav/>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contratar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div class="bg-gray-200 w-full min-h-screen flex items-center justify-center">
            <div class="w-full py-8">
                <div class="flex items-center justify-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                    </svg>
                    <h1 class="text-3xl font-bold text-blue-600 tracking-wider">Cotización</h1>
                </div>
                <div class="bg-white w-5/6 md:w-3/4 lg:w-2/3 xl:w-[500px] 2xl:w-[550px] mt-8 mx-auto px-16 py-8 rounded-lg shadow-2xl">

                    <form class="my-8 text-sm" action="{{ route('registrarContrato') }}" method="POST">
                        @csrf
                        <div class="flex flex-col my-4">
                            <label for="name" class="text-gray-700">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Ingresa tu nombre">
                        </div>

                        <div class="flex flex-col my-4">
                            <label for="email" class="text-gray-700">Correo electronico</label>
                            <input type="email" name="correo" id="correo" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Ingresa tu email">
                        </div>

                        <div class="flex flex-col my-4">
                            <label for="tel" class="text-gray-700">Telefono </label>
                            <input type="text" name="telefono" id="telefono" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Ingresa tu telefono">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="tel" class="text-gray-700">Municipio </label>
                            <input type="text" name="municipio" id="municipio" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Ingresa tu Municipio">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="tel" class="text-gray-700">Colonia </label>
                            <input type="text" name="colonia" id="colonia" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Ingresa tu Colonia">
                        </div>
                        <div class="flex flex-col my-4">
                            <label for="tel" class="text-gray-700">Fecha de Evento </label>
                            <input type="text" name="fecha" id="fecha" class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900" placeholder="Fecha Evento">
                        </div>
                        
                        
                      

                        <div class="flex flex-col my-4">
                            <div x-data="{ show: false }" class="relative flex items-center mt-2">
                                <button @click="show = !show" type="button" class="absolute right-2 bg-transparent flex items-center justify-center text-gray-700">

                                </button>
                            </div>
                        </div>

                       
                    
                        <div class="my-4 flex items-center justify-end space-x-4">
                            <button class="bg-blue-600 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase" type="submit">Enviar Datos</button>
                        </div>
                    </form>
                    
                   

                </div>
            </div>
        </div>
</body>
</html>
<x-footer/>