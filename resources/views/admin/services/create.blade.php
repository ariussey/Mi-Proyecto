@extends('adminlte::page')

@section('title', 'Esar')

@section('content_header')
    <h1>Crear Servicio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.services.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del servicio']) !!}
                
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del servicio', 'readonly']) !!}
                
                    @error('slug')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descripción') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción del servicio']) !!}
    
                    @error('description')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('url', 'URL') !!}
                    {!! Form::text('url', null, ['class' => 'form-control']) !!}

                    @error('url')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('icono', 'Icono') !!}
                    {!! Form::text('icono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el icono del servicio']) !!}
                
                    @error('icono')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('color', 'Color') !!}
                    {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el color del icono']) !!}
                
                    @error('color')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('status', 'Estado') !!}
                    {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el estado del icono']) !!}
                
                    @error('status')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>

                {!! Form::submit('Crear Servicio', ['class' => 'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection