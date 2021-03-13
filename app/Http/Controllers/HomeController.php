<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticia;
use App\Models\Portada;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke(){
        
        $noticias = Noticia::where('status', '2')->latest('id')->get()->take(4);

        $portadas = Portada::where('status', '2')->latest('id')->get();

        $services = Service::where('status', '2')->latest('id')->get()->take(4);
        
        return view('welcome', compact('noticias', 'portadas', 'services'));
    }
}
