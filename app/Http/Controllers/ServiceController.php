<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::where('status', 2)->paginate(20);

        return view('services.index', compact('services'));
    }
}
