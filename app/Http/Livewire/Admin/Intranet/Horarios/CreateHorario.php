<?php

namespace App\Http\Livewire\Admin\Intranet\Horarios;

use App\Models\Horario;
use Livewire\Component;

class CreateHorario extends Component
{
    public $open = false;

    public $dia, $hora_inicio, $hora_fin, $enlace, $id_moodle;

    protected $rules = [
        'dia' => 'required',
        'hora_inicio' => 'required',
        'hora_fin' => 'required',
        'enlace' => 'required',
        'id_moodle' => 'required'
    ];
    // Validación en tiempo real se debe quitar el wire:model.defer
    // public function updated($propertyName){
    //     $this->validateOnly($propertyName);
    // }

    public function guardar(){

        $this->validate();

        Horario::create([
            'dia' => $this-> dia,
            'hora_inicio' => $this-> hora_inicio,
            'hora_fin' => $this-> hora_inicio,
            'enlace' => $this-> enlace,
            'id_moodle' => $this-> id_moodle
        ]);

        $this->reset(['open', 'dia' ,'hora_inicio', 'hora_fin', 'enlace', 'id_moodle']);
        
        $this->emitTo('admin.intranet.horarios.show-horarios','render');
        $this->emit('alerta', 'El registro se agregó correctamente!');
    }

    public function render()
    {
        return view('livewire.admin.intranet.horarios.create-horario');
    }
}
