<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <style>
        h1{
            font-family: sans-serif;
            font-size: 30px;
        }
        .card{
            background: white;
            /* padding: 10px; */
            border: 1px solid #d6d6d6
        }
        .card-header{
            padding-bottom: 8px;
            border-bottom: solid 1px #e7e7e7;
        }
        .card-body{
            padding: 15px;
        }
        .card-footer{
            text-align: center;
            color: #868686;
            padding: 10px;
            border-top: solid 1px #e7e7e7;
            font-size: 15px;
        }
        .text-center{
            text-align: center!important;
            margin-left: auto;
            margin-right: auto;
            padding-top: 4px;
        }
        p{
            display: block;
            font-family: sans-serif;
        }
    </style>
    <div class="card">
        <div class="card-header text-center">
            <p class="text-center"><img class="text-center" width="240px" src="{{asset('img/home/esar-logo.png')}}" alt=""></p>
        </div>
        <div class="card-body">
            <h1 class="text-center" style="color: #10b981; padding-bottom:10px;">Formulario de Contacto Esar</h1>
            <br>
            <p><b>Apellidos y Nombres: </b>{{$contacto['nombre']}}</p>
            <p><b>Email: </b>{{$contacto['email']}}</p>
            <p><b>Celular: </b>{{$contacto['celular']}}</p>
            <p><b>Mensaje: </b>{{$contacto['mensaje']}}</p>
        </div>
        <div class="card-footer">
            <p>Mensaje enviado desde el formulario de contacto de <b style="color: #10b981"><a style="text-decoration: none; color:#10b981;" href="https://esar.edu.pe">esar.edu.pe</a></b></p>
        </div>
    </div>
    

    @livewireScripts
</body>
</html>