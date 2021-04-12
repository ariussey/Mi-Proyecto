<?php

namespace App\Http\Livewire\Admin\Intranet\Entidades;

use App\Models\Entidade;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ShowEntidades extends Component
{
    public $titulo;
    public $descripcion;


    public $buscador;
    public $sort = "id";
    public $direccion = "asc";

    protected $listeners = ['render'];

    // public function mount($data){
    //     $this->titulo = $data['titulo'];
    //     $this->descripcion = $data['descripcion'];
    // }

    public function render()
    {
        $entidades = Entidade::where('nombre', 'like', '%' . $this->buscador . '%')
                            ->orwhere('id', 'like', '%' . $this->buscador . '%')
                            ->orderBy($this->sort, $this->direccion)
                            ->get();
        return view('livewire.admin.intranet.entidades.show-entidades', compact('entidades'));
    }

    public function orden($sort){
        if ($this->sort == $sort) {
            if ($this->direccion == 'desc') {
                $this->direccion = 'asc';
            } else {
                $this->direccion = 'desc';
            }
            
        } else {
            $this->sort = $sort;
            $this->direccion = 'asc';
        }
        
    }

    public function index(){
        // $uss = HTTP::get('https://aulavirtual.esar.edu.pe/webservice/rest/server.php?wstoken=0f30a2873cbc37b9f22dcd1a4660e72a&wsfunction=core_user_get_users&moodlewsrestformat=json');

        // $usuarioArray = $uss->json();
        return view('admin.intranet.entidades.index');
    }

    public function edit(Entidade $entidad){
        $this->nombre = $entidad->nombre;
        $this->estado = $entidad->estado;
    }

}
