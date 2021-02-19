<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'icono', 'color', 'status'];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relación uno a muchos INVERSA
    public function user(){
        return $this->belongsTo(User::class);
    }
}
