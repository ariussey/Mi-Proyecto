<x-app-layout>
    {{-- {{$portadas}} --}}
    <section class="sld">
        <div class="slide">
            <ul>
                @foreach ($portadas as $portada)
                    <x-portada-slide :portada="$portada"/>
                @endforeach
            </ul>
        </div>
    </section>
    {{-- <section class="bg-cover" style="background-image: url({{asset('img/noticias/pexels-negative-space-177557.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">NOTICIAS Y ACTIVIDADES</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolor enim, nesciunt soluta non unde a voluptatem tempore veniam alias iste aut autem reprehenderit quaerat, debitis dolorum, magnam earum voluptate.</p>
                

                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    
                    <button type="submit" href="#" class="btn btn-green absolute right-0 top-0 mt-2">
                        Buscar
                    </button>
                    
                    
                </div>
            
            </div>
        </div>
    </section> --}}

    @livewire('noticia-index')


    {{-- VISTA DE NOTICIAS ANTIGUAS --}}
    {{-- <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($noticias as $noticia)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($noticia->image) {{Storage::url($noticia->image->url)}} @else https://cdn.pixabay.com/photo/2019/03/15/09/49/woman-4056684_960_720.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($noticia->tags as $tag)
                                <a href="{{route('noticias.tag', $tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                            @endforeach
                            <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                                <a href="{{route('noticias.show', $noticia)}}">
                                    {{$noticia->title}}
                                </a>
                            </h1>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{$noticias->links()}}
        </div>

    </div> --}}
    <x-footer />
</x-app-layout>