@php
    $sidebar_links = [
        [
            'name' => 'Reseña Histórica',
            'route' => route('nosotros.show', 'resena-historica'), 
            'active' => 1,
        ],
        [
            'name' => 'Objetivos',
            'route' => route('nosotros.show', 'objetivos'),
            'active' => 2,
        ],
        [
            'name' => 'Organigrama',
            'route' => route('nosotros.show', 'organigrama'),
            'active' => 3,
        ],
    ];
@endphp
<x-app-layout>
    @include('nosotros.partials.portada')

    <section class="py-4 degrade-nosotros">
        <small class="m-4 text-sm text-white font-medium"><a href="{{route('home')}}">Inicio</a> <i class="fas fa-angle-right px-4"></i> <a href="{{route('nosotros.index')}}">Nosotros</a> <i class="fas fa-angle-right px-4"></i> <b>{{$nosotro->name}}</b></small>
    </section>
    <section class="bg-white">
        <aside class="sidebar">
            <ul class="sidebar-links">
                <li>
                    <section class="sidebar-group depth-0" x-data="{active:false}">
                        <p class="font-bold text-2xl pl-4 pb-2"><span>Nosotros</span></p>
                        <ul class="sidebar-links sidebar-group-items">
                            @foreach ($sidebar_links as $sidebar_link)
                                <li><a class="sidebar-link @if($sidebar_link['active'] == $nosotro->id) active @endif" href="{{$sidebar_link['route']}}">{{$sidebar_link['name']}}</a></li>
                            @endforeach
                        </ul>
                    </section>
                </li>
            </ul>
        </aside>
        <div class="container rounded-xl my-4 py-4 text-justify">
            <div class="grid grid-cols-5">
                <div class="col-span-5 px-4 md:pl-2 lg:pl-24 lg:col-span-5">
                    <h1 class="m-4 text-4xl text-center text-green-500">{{$nosotro->name}}</h1>
                    <hr><br>
                    @if ($nosotro->name == 'Reseña Histórica')
                        @include('nosotros.contenido.resena')
                    @elseif ($nosotro->name == 'Objetivos') 
                        @include('nosotros.contenido.objetivos')
                    @elseif ($nosotro->name == 'Organigrama')
                        @include('nosotros.contenido.organigrama')
                    @endif
                    
                </div>
            </div>
        </div>
    </section>
</x-app-layout>