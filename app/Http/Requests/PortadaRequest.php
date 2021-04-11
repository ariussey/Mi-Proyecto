<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortadaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // if($this->user_id == auth()->user()->id){

        //     return true;

        // }
        // else {
        //     return false;
        // }
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //Recuperar la información del registro creado
        $portada = $this->route()->parameter('portada');

        $rules = [
            'title' => 'required|unique:portadas',
            'slug' => 'required|unique:portadas', 
            'status' => 'required|in:1,2',
            'portada_categoria_id' => 'required|unique:portadas'
            
        ];
        //Agregar para evitar que salga un error de validación de titulo, slug duplicado, si es que se actualiza sin ningun cambio
        //VERIFICAR SI ES FORMULARIO EDITAR (SI HAY ALGO ES UN EDIT, SI NO HAY NADA ES UN CREATE)
        if($portada){
            $rules['title'] = 'required|unique:portadas,title,'.$portada->id;
            $rules['slug'] = 'required|unique:portadas,slug,'.$portada->id;
            $rules['portada_categoria_id'] = 'required|unique:portadas,portada_categoria_id,'.$portada->id;

            if($this->status == 2){

                $rules = array_merge($rules, [
                    'description' => 'required',
                    'color' => 'required'
                ]);
                if(!$portada->image){
                    $rules = array_merge($rules, [
                        'file' => 'required',
                        // 'file' => 'image'
                    ]);
                }
    
            }
        }


        else {
                if($this->status == 2){
                    $rules = array_merge($rules, [
                        'file' => 'required',
                        // 'file' => 'image'
                    ]);

                $rules = array_merge($rules, [
                    'description' => 'required',
                    'color' => 'required'
                ]);
                

            }
        }
        return $rules;

    }
}
