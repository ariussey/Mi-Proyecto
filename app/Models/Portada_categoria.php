<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portada_categoria extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'status'];

    public function noticias(){
        return $this->hasOne(Portada::class);
    }

}
