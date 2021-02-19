@extends('adminlte::page')

@section('title', 'Esar')

@section('content_header')

    <a class="btn btn-success float-right" href="{{route('admin.noticias.create')}}">Agregar Noticia</a> 

    <h1>Lista de Noticias</h1>   
@stop

@section('content')

    @if (session('info'))

        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>

    @endif

    @livewire('admin.noticias-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop