<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el nombre de la categoría']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-4">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label class="mr-4">
        {!! Form::radio('status', 2) !!}
        Publico
    </label>
</div>
<hr>