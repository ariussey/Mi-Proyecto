<div class="form-group">
    {!! Form::label('title', 'Titulo') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el titulo de la noticia', 'autocomplete' => 'off']) !!}

    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la noticia', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('subtitle', 'Sub Titulo') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el subtitulo de la noticia']) !!}

    @error('subtitle')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach ($tags as $tag)
        <label class="mr-4">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>
    @endforeach
    
    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-4">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="image-wrapper">
            @isset ($noticia->image)
                <img id="picture" src="{{Storage::url($noticia->image->url)}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2017/09/30/03/01/fantasy-2801105_960_720.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            {!! Form::label('file', 'Imagen de la portada de la noticia') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            <hr>
            <p>Seleccione una imagen en formato PNG O JPG, el peso de la imagen debe ser menor a 1MB</p>
        </div>

        @error('file')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('body', 'Contenido de la noticia') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>