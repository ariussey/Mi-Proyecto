<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Noticia;
use App\Models\Portada;
use App\Models\Tag;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index(){
        $noticias = Noticia::where('status', 2)->latest('id')->paginate(8);
        $portadas = Portada::where('status', 2)->get();

        return view('noticias.index', compact('noticias', 'portadas'));
    }

    public function show(Noticia $noticia){

        $this->authorize('published', $noticia);

        $similares = Noticia::where('category_id', $noticia->category_id)
                            ->where('status', 2)
                            ->where('id','!=',$noticia->id)
                            ->latest('id')
                            ->take(4)
                            ->get();
        return view('noticias.show', compact('noticia', 'similares'));
    }

    public function category(Category $category){
        $noticias = Noticia::where('category_id', $category->id)
                            ->where('status', 2)
                            ->latest('id')
                            ->paginate(2);

        return view('noticias.category', compact('noticias', 'category'));
    }

    public function tag(Tag $tag){
        $noticias = $tag->noticias()->where('status', 2)->latest('id')->paginate(4);

        return view('noticias.tag', compact('noticias', 'tag'));
    }
}
