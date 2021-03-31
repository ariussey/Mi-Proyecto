@extends('adminlte::page')

@section('title', 'Esar')

@section('content_header')
    <h1>Crear Portada</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
                {!! Form::open(['route' => 'admin.portadas.store', 'autocomplete' => 'off', 'files' => true]) !!}
                
                    {!! Form::hidden('user_id', auth()->user()->id) !!}

                    @include('admin.portadas.partials.form')

                    {!! Form::submit('Crear Portada', ['class' => 'btn btn-primary btn-sm']) !!}

                {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css">

    <style>
        .image-wrapper{
            /* position: relative; */
            position: initial;
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
    {{-- <script type="text/javascript">
        $('#color').colorpicker();

        $('#color').on('colorpickerChange', function(event) {
        $('#demo').css('background-color', event.color.toString());
      });
      
    </script> --}}
    <script type="text/javascript">
        $('#color').css('background-color', $(color).val());
        $('#color').css('color', $(color).val());
        $('#color').colorpicker();
        $('#color').on('colorpickerChange', function(event) {            
        $('#color').css('background-color', event.color.toString());
        $('#color').css('color', event.color.toString());    
        });
    </script>
    {{-- <script>
        $(function() {
          $('#color').colorpicker({
            popover: false,
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
    {{-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> --}}

@endsection