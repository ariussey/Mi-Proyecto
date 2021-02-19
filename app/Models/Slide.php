<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    //Relación uno a muchos INVERSA
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
