<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    use HasFactory;
    
    const ACTIVO = 1;
    const INACTIVO = 2;

    protected $fillable = ['nombre', 'estado'];
}
