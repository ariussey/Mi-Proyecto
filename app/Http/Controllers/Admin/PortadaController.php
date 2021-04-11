<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portada;
use Illuminate\Http\Request;
//MOVER IMAGEN TEMPORAL A LA CARPETA STORAGE
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\PortadaRequest;
use App\Models\Portada_categoria;
use PhpParser\Node\Stmt\Return_;

class PortadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portadas = Portada::all();

        return view('admin.portadas.index', compact('portadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portada_categorias = Portada_categoria::pluck('name', 'id');
        return view('admin.portadas.create', compact('portada_categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortadaRequest $request)
    {
        //SUBIR IMAGEN AL SERVIDOR Storage::put('portadas', $request->file('file'));

        $portada = Portada::create($request->all());

        //VALIDAR SI SE ESTA ENVIANDO UNA IMAGEN, DE SER EL CASO SE AGREGA LA IMAGEN
        if($request->file('file')){
            $url = Storage::put('portadas', $request->file('file'));

            //AGREGAR LA IMAGEN A LA TABLA IMAGE
            $portada->image()->create([
                'url' => $url
            ]);

        }

        return redirect()->route('admin.portadas.edit', $portada)->with('info', 'La portada se creó correctamente.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Portada $portada)
    {
        return view('admin.portadas.show', compact('portada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Portada $portada)
    {
        $portada_categorias = Portada_categoria::pluck('name', 'id');
        return view('admin.portadas.edit', compact('portada', 'portada_categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PortadaRequest $request, Portada $portada)
    {
        $portada->update($request->all());

        //VALIDAR SI SE ESTA ENVIANDO UNA IMAGEN, DE SER EL CASO SE AGREGA LA IMAGEN
        if($request->file('file')){
            $url = Storage::put('portadas', $request->file('file'));

            //COMO ESTAMOS EDITANDO, VERIFICAR SI ESTE REGISTRO YA CUENTA CON IMAGEN
            if($portada->image){
                //COMO TIENE UNA IMAGEN GUARDADA, SE ELIMINA PARA PODER GUARDAR LA IMAGEN ACTUALIZADA
                Storage::delete($portada->image->url);

                //LUEGO DE BORRAR LA IMAGEN, SE AGREGA LA NUEVA IMAGEN A LA TABLA IMAGE CON LA IMAGEN ACTUALIZADA
                $portada->image->update([
                    'url' => $url
                ]);
            } 
            // SI EL FORMULARIO EN EDICIÓN NO CUENTA CON IMAGEN, ENTONCES SE CREA LA IMAGEN
            else {
                $portada->image()->create([
                    'url' => $url
                ]);
            }

            //AGREGAR LA IMAGEN A LA TABLA IMAGE
            $portada->image()->create([
                'url' => $url
            ]);

        }

        return redirect()->route('admin.portadas.edit', $portada)->with('info', 'La portada se actualizó correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portada $portada)
    {
        $portada->delete();

        return redirect()->route('admin.portadas.index', $portada)->with('info', 'La portada se eliminó correctamente.');
    }
}
