<x-app-layout>
{{-- {{$portadas}} --}}

    {{-- @foreach ($portadas as $portada)
        @if($portada->portada_categoria->name=='Inicio')
            <section class="bg-cover" style="background-image: @if ($portada->image) url({{Storage::url($portada->image->url)}} @else url({{asset('img/home/pexels-sam-lion-6001670.jpg')}} @endif">    
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                    <div class="w-full md:w-3/4 lg:w-1/2">
                        <div class="py-2 px-4 rounded-xl shadow" style="background-color:{{$portada->color}}">
                            <h1 class="text-white font-bold text-4xl">{{$portada->title}}</h1>
                            <div class="text-white text-lg mt-2 mb-4">{!! $portada->description !!}</div>
                        </div>
                        <div class="pt-2 relative mx-auto text-gray-600">
                            <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                            type="search" name="search" placeholder="Search">
                            
                            <button type="submit" href="#" class="btn btn-green absolute right-0 top-0 mt-2">
                                Buscar
                            </button>

                        </div>
                    </div>
                    
                </div>
            </section>
        @endif
        
    @endforeach --}}

    <section class="sld">
        <div class="slide">
            <ul>
                @foreach ($portadas as $portada)
                    <x-portada-slide :portada="$portada"/>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="services degrade">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <style>
                .services{
                    margin-top: 20px; /* -95 */
                }
                .card-service{
                    margin-bottom: 1rem;
                    transition: 0ms;
                }
                .card-service :hover{
                    margin-top: -1.5rem;
                    box-shadow: 0 2.25rem 1.5rem -1.5rem rgba(33,37,41,.3),0 0 1.5rem .5rem rgba(33,37,41,.05);
                    transition: .20s all;
                    
                }
                .reset{
                    margin-bottom: 0;
                    transition: .20s;
                }
                .reset :hover{
                    margin-top: 0;
                    box-shadow: none;
                }
                .degrade{
                    background: linear-gradient(180deg,#ffffff00,#afe4ec,#10b981);
                }
                
            </style>
            @foreach ($services as $service)
            <a target="_blank" href="{{$service->url}}" class="text-gray-600 hover:text-{{$service->color}}-500 card-service">
                <div class="bg-white w-full h-40 p-4 shadow text-center rounded-md border-b-8 border-{{$service->color}}-500 reset"> 
                    <i class="{{$service->icono}} fa-3x reset"></i>
                    <h1 class="text-2xl font-bold leading-8 reset">{{$service->name}}</h1>
                    <hr>
                    <p class="text-sm text-gray-500 reset">{{$service->description}}</p>
                </div>
            </a>          
            @endforeach
        </div>
    </section>

    <section class="bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes como ingresar al Aula Virtual?</h1>
        <p class="text-center text-white">Lorem ipsum dolor sit, amet doloribus placeat, sint molestias quos velit ipsam vel exercitationem quam facilis culpa quidem ut minus vitae?</p>
        
        <div class="flex justify-center mt-4">
            <a href="{{route('tutoriales.index')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Tutoriales de Ayuda
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600 my-8">ULTIMAS NOTICIAS</h1><br>
        {{-- <p class="text-center text-gray-500 text-sm mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas aliquid, soluta sed nostrum unde quaerat sit nihil eaque provident adipisci ad nesciunt architecto.</p> --}}
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($noticias as $noticia)
            
                <x-noticia-card :noticia="$noticia"/>

            @endforeach
        </div>
    </section>

    <x-footer />
</x-app-layout>
