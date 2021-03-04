<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticia;

class HomeController extends Controller
{
    public function __invoke(){
        
        $noticias = Noticia::where('status', '2')->latest('id')->get()->take(4);
        
        return view('welcome', compact('noticias'));
    }
}
