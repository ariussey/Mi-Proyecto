<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$noticia->title}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {{$noticia->subtitle}}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($noticia->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($noticia->image->url)}}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/03/15/09/49/woman-4056684_960_720.jpg" alt="">                    
                    @endif
                </figure>
                <div class="text-base text-gray-500 mt-4">
                    {!!$noticia->body!!}
                </div>
            </div>

            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$noticia->category->name}}</h1>

                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('noticias.show', $similar)}}">
                                @if ($similar->image)
                                    <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                @else
                                    <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/03/15/09/49/woman-4056684_960_720.jpg" alt="">                                
                                @endif
                                <span class="ml-2 text-gray-600">{{$similar->title}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>