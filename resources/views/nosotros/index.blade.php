<x-app-layout>
    {{-- PORTADA --}}
    @include('nosotros.partials.portada')

    <section class="py-4 degrade-nosotros">
        <small class="m-4 text-sm text-white"><a class="hover:font-bold hover:text-lg" href="{{route('home')}}">Inicio</a> <i class="fas fa-angle-right px-4"></i> <b><a href="{{route('nosotros.index')}}">Nosotros</a></b></small>
    </section>
    <section class="pb-24">
    <h1 class="m-8 text-4xl text-center text-green-500">Nosotros</h1>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($nosotros as $nosotro)
                <article class="card">
                    <img class=" h-100 w-100 object-cover" src="{{Storage::url($nosotro->image->url)}}" alt="">
                    <div class="card-body">
                        <h1 class="card-title text-center">{{Str::limit($nosotro->name, 30)}}</h1>
                        {{-- <p class="text-gray-500 text-sm mb-2">Categoría: {{$noticia->category->name}}</p> --}}
                        <a  href="{{route('nosotros.show', $nosotro)}}" class="btn-block mt-4 btn btn-green">
                            Más información
                        </a>
                    </div>
                </article>
                @endforeach
            </div>    
        </div>
    </section>
</x-app-layout>