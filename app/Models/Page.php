<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    //Relación uno a muchos INVERSA
    public function navbar(){
        return $this->belongsTo(Navbar::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
