<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portada_categoria;
use Illuminate\Http\Request;

class Portada_categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portada_categorias = Portada_categoria::all();
        return view('admin.portadas.categorias.index', compact('portada_categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.portadas.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:portada_categorias',
            'status' => 'required'
        ]);

        $portada_categoria = Portada_categoria::create($request->all());

        return redirect()->route('admin.portadas.categorias.edit', $portada_categoria)->with('info', 'La categoría se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Portada_categoria $portada_categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Portada_categoria $categoria)
    {
        return view('admin.portadas.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portada_categoria $categoria)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:portada_categorias,slug,'.$categoria->id,
            'status' => 'required'
        ]);

        $categoria->update($request->all());

        return redirect()->route('admin.portadas.categorias.edit', $categoria)->with('info', 'La categoría se actualizó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portada_categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('admin.portadas.categorias.index')->with('info', 'La categoría se eliminó correctamente');
    }
}
