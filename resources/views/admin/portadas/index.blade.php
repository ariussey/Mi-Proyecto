@extends('adminlte::page')

@section('title', 'Esar')

@section('content_header')
    <h1>Lista de Portadas</h1>
@stop

@section('content')

    @if (session('info'))

    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>

    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-success btn-sm" href="{{route('admin.portadas.create')}}">Agregar Portada</a>
            <a class="btn btn-primary btn-sm" href="{{route('admin.portadas.categorias.index')}}">Gestión Categoría</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Categoria</th>
                        <th>Imagen</th>
                        <th>Color</th>
                        <th>Estado</th>
                        <th>Usuario</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portadas as $portada)
                        <tr>
                            <td>{{$portada->id}}</td>
                            <td>{{$portada->title}}</td>
                            <td>{!! $portada->description !!}</td>
                            <td>{{$portada->portada_categoria->name}}</td>
                            <td><img width="100px" src="@if ($portada->image) {{Storage::url($portada->image->url)}} @else https://esar.edu.pe/img/home/pexels-sam-lion-6001670.jpg @endif" alt=""></td>
                            <td><span class="rounded px-3" style="background-color: {{$portada->color}};">&nbsp;&nbsp;&nbsp;</span></td>
                            <td>{{$portada->status}}</td>
                            <td>{{$portada->user->name}}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.portadas.edit', $portada)}}">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('admin.portadas.destroy', $portada)}}" method="POST">
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