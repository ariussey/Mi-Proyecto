<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portada extends Model
{
    use HasFactory;

    //HABILITAR ASIGNACIÓN MASIVA DE DATOS NO HABILITADOS
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relación Uno a Muchos Inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación Uno a Uno Polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function portada_categoria(){
        return $this->belongsTo(Portada_categoria::class);
    }
}
