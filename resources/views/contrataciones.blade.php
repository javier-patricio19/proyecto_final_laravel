<x-nav />
<div class="flex min-h-full align-items-start justify-center py-12 px-4 sm:px-6 lg:px-8">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Nombre
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Email
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                            </svg></a>
                    </div>
                </th>

                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Telefono
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Municipio
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Colonia
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                            </svg></a>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contrataciones as $contrato)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-4 font-medium text-gray-900 whitespace-nowra">
                        {{ $contrato->id }}
                    </th>
                    <th scope="row" class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{ $contrato->nombre }}
                    </th>
                    <th scope="row" class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{ $contrato->telefono }}
                    </th>
                    <th scope="row" class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{ $contrato->municipio }}
                    </th>
                    <th scope="row" class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{ $contrato->colonia }}
                    </th>
                    <th scope="row" class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{ $contrato->fecha }}
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
