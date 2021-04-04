
@extends('adminlte::page')

@section('title', 'Intranet')

@section('content_header')
    <h1>Regitro de Entidades</h1>
@stop

@section('content')
    
    @livewire('admin.intranet.entidades.show-entidades')


@stop

@section('css')
    

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    {{-- <style>
        .jetstream-modal{
            z-index: 9999;
        }
    </style> --}}
@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- <script>
        Livewire.on('alerta', function(mensaje){
            Swal.fire(
            'Guardado!',
            mensaje,
            'success'
            )
        })
    </script> --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
@stop