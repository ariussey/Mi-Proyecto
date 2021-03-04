<?php

namespace App\Http\Controllers;

use App\Models\adminisitrador;
use App\Models\User;
use Illuminate\Http\Request;



class administradorController extends Controller
{
    public function index(){
        
        $administradores = adminisitrador::all()->paginate(8);
        return view("admin.administrador", compact('administradores'));

    }
    //
}
