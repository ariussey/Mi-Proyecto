<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;

    //Relación uno a muchos INVERSA
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación uno a muchos
    public function pages(){
        return $this->hasMany(Nabvar::class);
    }
}
