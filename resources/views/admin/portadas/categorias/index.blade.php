@extends('adminlte::page')

@section('title', 'Esar')

@section('content_header')
    <h1>Mostrar lista de Categorias de Portadas</h1>
@stop

@section('content')

    @if (session('info'))

    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>

    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-success btn-sm" href="{{route('admin.portadas.categorias.create')}}">Agregar Categoría</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Slug</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portada_categorias as $portada_categoria)
                    
                        <tr>
                            <td>{{$portada_categoria->id}}</td>
                            <td>{{$portada_categoria->name}}</td>
                            <td>{{$portada_categoria->slug}}</td>
                            <td>{{$portada_categoria->status}}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.portadas.categorias.edit', $portada_categoria)}}">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('admin.portadas.categorias.destroy', $portada_categoria)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>                                    
                                </form>
                            </td>
                        </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop