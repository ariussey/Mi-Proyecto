<x-app-layout>
    @if (session('info'))
            <div x-data="{ open: true}" >
                <!-- component -->
                <div x-show="open" style="right: 0;position: fixed;top: 0;margin: 10px;" class="relative flex flex-col sm:flex-row sm:items-center bg-green-50 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6">
                    <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                        <div class="text-green-500">
                            <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="text-sm font-medium ml-3">{{session('info')}}</div>
                    </div>
                    <div class="text-sm tracking-wide text-gray-500 mt-4 sm:mt-0 sm:ml-4">Pronto nos comunicaremos contigo</div>
                    <button x-on:click="open = false" class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>     
            </div>
        @endif
    {{-- PORTADA --}}
    <section class="sld">
        <div class="slide">
            <ul>
                @foreach ($portadas as $portada)
                    <x-portada-slide :portada="$portada"/>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="py-4 degrade-nosotros">
        <small class="m-4 text-sm text-white"><a class="hover:font-bold hover:text-lg" href="{{route('home')}}">Inicio</a> <i class="fas fa-angle-right px-4"></i> <b><a href="{{route('contactanos.index')}}">Contáctanos</a></b></small>
    </section>
    <section class="pb-24">
    <h1 class="m-8 text-4xl text-center text-green-500">Contáctanos</h1>
        <div class="container">
            
            <!-- Container -->
            <div class="container mx-auto">
                <div class="flex justify-center px-2 my-12">
                    <!-- Row -->
                    <div class="w-full lg:w-11/12 flex shadow-2xl rounded-lg">
                        <!-- Col -->
                        <div
                            class="w-full h-auto bg-gray-400 bg-center hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                            style="background-image: url('https://images.pexels.com/photos/4491491/pexels-photo-4491491.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');"
                        ></div>
                        <!-- Col -->
                        <div class="w-full bg-white p-5 rounded-lg lg:rounded-l-none">
                            <div class="px-8 mb-4 text-center">
                                <h3 class="pt-4 mb-2 text-2xl text-green-500">¿En que podemos ayudarte?</h3>
                                <p class="mb-4 text-lg text-gray-700">
                                    Ingresa tus datos y escribe tu consulta o información que necesites, pronto nos comunicaremos Ud.
                                </p>
                            </div>
                            <form action="{{route('contactanos.store')}}" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                                @csrf
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-green-500" for="email">
                                        Apellidos y Nombres
                                    </label>
                                    <input autocomplete="off"
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none  focus:border-green-400 focus:shadow-outline"
                                        name="nombre"
                                        placeholder="Ingresa tus apellidos y nombres completos..."
                                    />
                                    @error('nombre')
                                        <small class="text-red-500 font-bold">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-green-500" for="email">
                                        E-mail
                                    </label>
                                    <input autocomplete="off"
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:border-green-400 focus:shadow-outline"
                                        name="email"
                                        placeholder="Ingresa tu email..."
                                    />
                                    @error('email')
                                        <small class="text-red-500 font-bold">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-green-500" for="email">
                                        Celular
                                    </label>
                                    <input autocomplete="off"
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:border-green-400 focus:shadow-outline"
                                        name="celular"
                                        placeholder="Ingresa tu número de celular..."
                                    />
                                    @error('celular')
                                        <small class="text-red-500 font-bold">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-green-500" for="email">
                                        Mensaje
                                    </label>
                                    <textarea class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border border-gray-200 rounded shadow appearance-none focus:ring-0  focus:outline-none focus:border-green-400 "
                                        rows="6"
                                        name="mensaje"
                                        placeholder="Escriba su mensaje..."
                                    ></textarea>
                                    @error('mensaje')
                                        <small class="text-red-500 font-bold">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button
                                        class="w-full px-4 py-2 font-bold text-white bg-green-500 rounded-full hover:bg-green-700 focus:outline-none focus:shadow-outline"
                                        type="submit"
                                    >
                                        Enviar mensaje
                                    </button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </section>
    <x-footer />
</x-app-layout>