@extends('adminlte::page')

@section('title', 'Esar')

@section('content_header')
    <h1>Editar Portada</h1>
@stop

@section('content')

    @if (session('info'))

    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>

    @endif

    <div class="card">
        <div class="card-body">
                <!-- CAMBIAR EL Form::open por Form::model, agregar $portada en un array y agregar el mothod -->
                {!! Form::model($portada,['route' => ['admin.portadas.update', $portada], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}
                
                    {{-- {!! Form::hidden('user_id', auth()->user()->id) !!} --}}

                    @include('admin.portadas.partials.form')
                    
                    {!! Form::submit('Actualizar Portada', ['class' => 'btn btn-primary btn-sm']) !!}

                {!! Form::close() !!}
                
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css">
    <style>
        
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>

@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
    <script>
        $(function () {
          // Basic instantiation:
          $('#color').colorpicker();
          
          // Example using an event, to change the color of the #demo div background:
          $('#color').on('colorpickerChange', function(event) {
            //$('#demo').css('background-color', event.color.toString());
          });
        });
      </script>
      {{-- <script>
        $(function() {
          $('#color').colorpicker({
            popover: true,
            inline: null,
            container: '#demo'
          });
        });
      </script> --}}

    <script>
        $(document).ready( function() {
            $("#title").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );

        //Cambiar imagen del file
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result); 
            };

            reader.readAsDataURL(file);
        }

    </script>

@endsection