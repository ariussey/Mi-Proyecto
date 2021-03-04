@props(['noticia'])

<article class="card">
    <img class="h-36 w-full object-cover" src="{{Storage::url($noticia->image->url)}}" alt="">

    <div class="card-body">
        <h1 class="card-title">{{Str::limit($noticia->title, 30)}}</h1>
        <p class="text-gray-500 text-sm mb-2">Categoría: {{$noticia->category->name}}</p>
        
        <a  href="{{route('noticias.show', $noticia)}}" class="btn-block mt-4 btn btn-green">
            Ver noticia completa
        </a>

    </div>
</article>