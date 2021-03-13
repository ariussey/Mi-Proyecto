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
    <div class="col">
        <div class="image-wrapper">
            @isset ($portada->image)
                <img id="picture" src="{{Storage::url($portada->image->url)}}" alt="">
            @else
                <img id="picture" src="https://esar.edu.pe/img/home/pexels-sam-lion-6001670.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen de portada') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde accusantium corporis ad magnam. Voluptate odit modi laboriosam ex provident, harum, rem error assumenda quia, cumque aut unde vel obcaecati accusantium!</p>
        </div>

        @error('file')
            <small class="text-danger">{{$message}}</small>
        @enderror

    </div>
</div>


<div class="form-group">
    {!! Form::label('color', 'Color') !!}
    {!! Form::text('color', null, ['class' => 'form-control colorpicker col-6']) !!}
    @isset($portada->color)
    <p class="col-6 px-4" style="background-color: {{$portada->color}}" id="demo">sdfsd</p>
    @else
    <p class="col-6 px-4" style="background-color: #ffffff" id="demo">Sin Color</p>
    @endif
</div>