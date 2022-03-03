<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class vistasController extends Controller
{
    //

    public function verVista2()
    {
        
        return view('otro');
    }
}
