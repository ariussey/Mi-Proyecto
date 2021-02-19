<?php

namespace App\Policies;

use App\Models\Noticia;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NoticiaPolicy
{
    use HandlesAuthorization;

    public function author(User $user, Noticia $noticia){

        if($user->id == $noticia->user_id){
            return true;
        }
        else{
            return false;
        }
    }

    public function published(?User $user, Noticia $noticia){
        if($noticia->status == 2){
            return true;
        } else{
            return false;
        }
    }
}
