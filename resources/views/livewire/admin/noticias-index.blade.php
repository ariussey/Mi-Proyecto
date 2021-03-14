<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre de la noticia">
    </div>

    @if ($noticias->count())
        <div class="card-body">
            <table class="table table-hover table-responsive table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Subtítulo</th>
                        <th>Descripción</th>
                        <th>Creador</th>
                        <th>Imagen</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($noticias as $noticia)
                        <tr>
                            <td>{{$noticia->id}}</td>
                            <td>{{$noticia->title}}</td>
                            <td>{{$noticia->subtitle}}</td>
                            <td>{{$noticia->description}}</td>
                            <td>{{$noticia->user->name}}</td>
                            <td><img width="100px" src="@if ($noticia->image) {{Storage::url($noticia->image->url)}} @else https://esar.edu.pe/img/home/pexels-sam-lion-6001670.jpg @endif" alt=""></td>
                            <td>{{$noticia->status}}</td>
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