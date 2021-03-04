<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //Query Scopes
    public function scopeCategory($query, $category_id){

        if($category_id){
            return $query->where('category_id', $category_id);
        }

    }

    //Relación uno a muchos INVERSA

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relación muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relación uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
