Soy admin
@foreach ($administradores as $administrador)
<table>
    <td>ID</td>
    <td>USUARIO</td>
    <th>
{{$administrador->id}}
</th>
<th>
    {{$administrador->name}}
</th>
    
@endforeach

</table>

<hr>

<table class="table table-striped shadow">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($administradores as $administrador)
        <tr>
            <td>{{$administrador->id}}</td>
            <td>{{$administrador->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$administradores->links()}}