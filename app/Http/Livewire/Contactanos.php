<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

use App\Models\Portada;
use Illuminate\Http\Request;

class Contactanos extends Component
{
    public $nombre,  $email, $celular, $mensaje;

    public function render()
    {
        return view('livewire.contactanos');
    }

    public function index(){
        $portadas = Portada::all();
        return view('contactanos.index', compact('portadas'));
    }

    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'celular' => 'required',
            'mensaje' => 'required'
        ]);
        $correo = new ContactanosMailable($request->all());

        Mail::to('angemar@esargatnau.onmicrosoft.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'El mensaje de envió correctacente');
    }
}
