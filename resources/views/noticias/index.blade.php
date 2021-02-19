<x-app-layout>
    <div class="container py-8">
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

    </div>
</x-app-layout>