<?php

namespace App\Http\Controllers;

use App\Models\Nosotro;
use App\Models\Noticia;
use App\Models\Portada;

use Illuminate\Http\Request;

class NosotroController extends Controller
{
    public function index(){
        $noticias = Noticia::all();
        $portadas = Portada::all();
        $nosotros = Nosotro::all();
    return view('nosotros.index', compact('portadas', 'noticias', 'nosotros'));
    }


    public function show(Nosotro $nosotro){

        $this->authorize('published', $nosotro);
       
        $portadas = Portada::all();

        return view('nosotros.show', compact('nosotro', 'portadas'));
    }
}
