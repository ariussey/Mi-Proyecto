<div class="form-group">
    {!! Form::label('title', 'Título') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el título de la portada']) !!}
    
    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}
</div>
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
<div class="form-group">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('portada_categoria_id', 'Categoría') !!}
    {!! Form::select('portada_categoria_id', $portada_categorias, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-4">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label class="mr-4">
        {!! Form::radio('status', 2) !!}
        Público
    </label>
    @error('status')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="image-wrapper">
            @isset ($portada->image)
                <img id="picture" src="{{Storage::url($portada->image->url)}}" alt="">
            @else
                <img id="picture" src="https://esar.edu.pe/img/home/pexels-sam-lion-6001670.jpg" alt="">
            @endisset
        </div>
        @isset($portada)
            <div class="col-12 m-2 rounded" style="background-color: {{$portada->color}}; display:inline-grid">
                <p class="text-white m-0">{{$portada->title}}</p>
                <small class="text-white">{!!$portada->description!!}</small>
                @php
                    $padding = '115';
                @endphp
            </div>
        @endisset
    </div>
    <div class="col-12 col-md-5 ml-md-2">
        <div class="form-group">
            {!! Form::label('file', 'Imagen de portada') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            <hr>
            <p>Seleccione una imagen en formato PNG O JPG, el peso de la imagen debe ser menor a 1MB</p>
        </div>

        @error('file')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div class="form-group" style="padding-top: 0 px; position: relative;">
            {!! Form::label('color', 'Color') !!}
            {!! Form::text('color', null, ['class' => 'form-control colorpicker col-6']) !!}
            {{-- @isset($portada->color)
            <p class="col-6 px-4" style="background-color: {{$portada->color}}" id="demo"></p>
            @else
            <p class="col-6 px-4" style="background-color: #ffffff" id="demo">Sin Color</p>
            @endif --}}
        </div>
    </div>
</div>

@php
        $padding = '0';
    @endphp
