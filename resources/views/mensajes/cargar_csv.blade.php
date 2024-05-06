<x-app-layout>
    <div class="max-w-4xl mx-auto  px-4 py-7">
        <div class=" p-6 bg-white border border-gray-200 rounded-lg shadow">
            <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
            </svg>
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Carga tu Archivo CSV con la Imformacion de los clientes</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Recuera que solo tienes que Copiar tus registros desde tu Archivo Excel a la Plantilla que nosotros te damos, <br>Cada Plantilla es Diferente para el tipo de Mensajes que Utilizas <br></p>
            // ruta del Archivo cargado
            <a href="{{asset('file/plantilla_envios_1.csv')}}" download="" class="inline-flex font-medium items-center text-blue-600 hover:underline ">
                Descargar Plantilla
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                </svg>
            </a>
            <hr class="my-5">
            //Ruta para el controller
            <form action="{{ route('mensaje.enviar') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="pt-4" for="csv_file">Seleccionar archivo CSV:</label> 
                    <br>
                    <input class="py-6"  type="file" name="csv_file" id="csv_file" class="form-control-file">
                </div>
                <button type="submit" class="ext-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><span class="text-white">Cargar CSV</span></button>
            </form>

        </div>
    </div>
</x-app-layout>
