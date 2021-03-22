@foreach ($portadas as $portada)
    @if($portada->portada_categoria->name=='Nosotros')
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
@endforeach