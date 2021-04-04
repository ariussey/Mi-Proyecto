<?php

namespace App\Http\Livewire\Admin\Intranet\Entidades;

use App\Models\Entidade;
use Livewire\Component;

class CreateEntidade extends Component
{
    public $open = false;

    public $nombre, $estado;

    public function guardar(){
        Entidade::create([
            'nombre' => $this-> nombre,
            'estado' => $this-> estado
        ]);

        $this->reset(['open', 'nombre' ,'estado']);
        
        $this->emit('render');
        $this->emit('alerta', 'El registro se agregó correctamente!');
    }

    public function render()
    {
        return view('livewire.admin.intranet.entidades.create-entidade');
    }


}
