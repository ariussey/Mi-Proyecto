<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //Habilitar la asignación masiva
    protected $fillable = ['url'];

    //Relación Polimorfica
    public function imageable(){
        return $this->morphTo();
    }
}
