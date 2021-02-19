<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre de la noticia">
    </div>

    @if ($noticias->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($noticias as $noticia)
                        <tr>
                            <td>{{$noticia->id}}</td>
                            <td>{{$noticia->title}}</td>
                            <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.noticias.edit', $noticia)}}">Editar</a></td>
                            <td width="10px">
                                <form action="{{route('admin.noticias.destroy', $noticia)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$noticias->links()}}
        </div>
        
    @else
        <div class="card-body">
            <strong>No se encontró ningun registro...</strong>
        </div>
    @endif

</div>