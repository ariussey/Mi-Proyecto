<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\NoticiaRequest;

use function GuzzleHttp\Promise\all;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.noticias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        $categories = Category::pluck('name', 'id');

        return view('admin.noticias.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiaRequest $request)
    {

        //return Storage::put('noticias', $request->file('file'));

        $noticia = Noticia::create($request->all());

        if($request->file('file')){
            
            $url = Storage::put('noticias', $request->file('file'));

            $noticia->image()->create([
                'url' => $url
            ]);

        }

        if($request->tags){

            $noticia->tags()->attach($request->tags);

        }

        return redirect()->route('admin.noticias.edit', $noticia);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        return view('admin.noticias.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //Solo puede editar el creador
        //$this->authorize('author', $noticia);

        $tags = Tag::all();

        $categories = Category::pluck('name', 'id');

        return view('admin.noticias.edit', compact('noticia', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticiaRequest $request, Noticia $noticia)
    {
        //Solo puede editar el creador
        //$this->authorize('author', $noticia);

        $noticia->update($request->all());

        if($request->file('file')){
            $url = Storage::put('noticias', $request->file('file'));

            if($noticia->image){

                Storage::delete($noticia->image->url);

                $noticia->image->update([
                    'url' => $url
                ]);

            }else{
                $noticia->image()->create([
                    'url' => $url
                ]);
            }

        }

        if($request->tags){

            $noticia->tags()->sync($request->tags);

        }

        return redirect()->route('admin.noticias.edit', $noticia)->with('info', 'La noticia se actualizó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        $this->authorize('author', $noticia);
        
        $noticia->delete();

        return redirect()->route('admin.noticias.index', $noticia)->with('info', 'La noticia se eliminó correctamente');
    }
}
