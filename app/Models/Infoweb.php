<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infoweb extends Model
{
    use HasFactory;

    //Relación uno a muchos INVERSA
    public function user(){
        return $this->belongsTo(User::class);
    }
}
