<?php

namespace App\Policies;

use App\Models\Nosotro;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NosotroPolicy
{
    use HandlesAuthorization;

 
    public function author(User $user, Nosotro $nosotro){

        if($user->id == $nosotro->user_id){
            return true;
        }
        else{
            return false;
        }
    }

    public function published(?User $user, Nosotro $nosotro){
        if($nosotro->status == 2){
            return true;
        } else{
            return false;
        }
    }
}
