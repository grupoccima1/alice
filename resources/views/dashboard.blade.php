<x-app-layout>
    <section class="bg-cover bg-center" style="background-image: url({{ asset('img/contents/portada_1.jpg') }})">
        <div class="max-w-7xl mx-auto  px-4 py-44">
            <div class=" pb-3">
                <p class="text-white font-bold text-2xl">Version Beta</p>
                <h1 class="text-white font-bold text-5xl py-2">Soy Alice <br> de GrupoCCIMA</h1>
            </div>
            
        </div>
    </section>
        {{-- contenido --}}
    <section class="bg-gray-200 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-gray-500 font-semibold text-3xl text-center py-10">Envios Aprodados</h2>
            <div class="grid grid-cols-3 gap-8 mx-10">
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <img src="{{asset('img/icons/cobro.gif')}}" width="64" height="64" alt="">
                    <h3 class="text-gray-900 font-medium text-2xl py-4">Mensajes de <br>Cobranza</h3>
                    <p class="text-gray-500">Mensajes de Cobranza del Desarrollo de Porttoblanco, <span class="font-weight-bold text-blue-800">Clientes en estado Morozo 1era Etapa</span></p>
                    <div class="mt-6">
                        <a class="flex justify-between" href="{{route('clientes.cargarCSVForm')}}">
                            <span class="font-medium">Enviar Mensajes</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <img src="{{asset('img/icons/avances.gif')}}" width="64" height="64" alt="">
                    <h3 class="text-gray-900 font-medium text-2xl py-4">Anvances de <br>Obra</h3>
                    <p class="text-gray-500">Envio de Videos con los Recientes cambios en el desarrollo de PorttoBlanco, Videos Mas recientes</p>
                    <div class="mt-6">
                        <a class="flex justify-between" href="">
                            <span class="font-medium">Enviar Mensajes</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white px-6 py-8 rounded-sm shadow-md">
                    <img src="{{asset('img/icons/fireworks-.gif')}}" width="64" height="64" alt="">
                    <h3 class="text-gray-900 font-medium text-2xl py-4">Bienvenida a Nuevos<br>Clientes</h3>
                    <p class="text-gray-500">Envio de Recursos a los nuevos Clientes, Reglamentos y Cronograma de Entrega, Procedimiento de Facturacion.</p>
                    <div class="mt-6">
                        <a class="flex justify-between" href="">
                            <span class="font-medium">Enviar Mensajes</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                        </a>
                    </div>
                </div>                
            </div>
        </div>
    </section>


</x-app-layout>
