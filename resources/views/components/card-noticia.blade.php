@props(['noticia'])

<article class="card mb-8">
    @if ($noticia->image)
        <img class="w-full h-72 object-cover object-center" src="{{Storage::url($noticia->image->url)}}" alt="">
    @else
        <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/03/15/09/49/woman-4056684_960_720.jpg" alt="">
    @endif
    
    <div class="card-body">
        <h1 class="card-title">
            <a href="{{route('noticias.show', $noticia)}}">{{$noticia->title}}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {!!$noticia->description!!}
        </div>
    </div>

    <div class="px-6 pt-4 pb-2">
        @foreach ($noticia->tags as $tag)
            <a href="{{route('noticias.tag', $tag)}}" class="inline-block bg-{{$tag->color}}-300 rounded-full px-3 py-1 text-sm text-{{$tag->color}}-900">{{$tag->name}}</a>
        @endforeach
    </div>
</article>