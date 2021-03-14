@extends('adminlte::page')

@section('title', 'Esar')

@section('content_header')
    <h1>Lista de Servicios</h1>
@stop

@section('content')

    @if (session('info'))

        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>

    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-success btn-sm" href="{{route('admin.services.create')}}">Agregar Servicio</a>
        </div>

        <div class="card-body">
            <table class="table table-hover table-responsive-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Url</th>
                        <th>Icono</th>
                        <th>Color</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{$service->id}}</td>
                            <td>{{$service->name}}</td>
                            <td>{{$service->description}}</td>
                            <td>{{$service->url}}</td>
                            <td><i class="{{$service->icono}} text-{{$service->color}}"></i></td>
                            <td><span class="bg-{{$service->color}} rounded-lg">&nbsp; &nbsp; &nbsp;</span></td>
                            <td>{{$service->status}}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.services.edit', $service)}}">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('admin.services.destroy', $service)}}" method="POST">
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