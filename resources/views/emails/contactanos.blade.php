<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @livewireStyles

</head>
<body>
    <h1>Correo Electrónico</h1>
    <hr>
    <p><b>Apellidos y Nombres: </b>{{$contacto['nombre']}}</p>
    <p><b>Email: </b>{{$contacto['email']}}</p>
    <p><b>Celular: </b>{{$contacto['celular']}}</p>
    <p><b>Mensaje: </b>{{$contacto['mensaje']}}</p>
    <livewire:contactanos />

    @livewireScripts
</body>
</html>