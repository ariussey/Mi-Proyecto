<?php

namespace App\Http\Livewire\Admin\Intranet\Horarios;

use App\Models\Horario;
use Livewire\Component;

class ShowHorarios extends Component
{

    public $buscador;
    public $sort = 'id';
    public $direccion = 'asc';
    public $dia='';

    protected $listeners = ['render'];

    public function render()
    {
        $horarios = Horario::where('dia', 'like', '%'.$this->buscador.'%')
                        ->orwhere('id', 'like', '%'.$this->buscador.'%')
                        ->orwhere('id_moodle', 'like', '%'.$this->buscador.'%')
                        ->orderBy($this->sort, $this->direccion)
                        ->get();

        return view('livewire.admin.intranet.horarios.show-horarios', compact('horarios'));
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
        return view('admin.intranet.horarios.index');
    }
}
