<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administracion extends Controller
{

    public function institucion()
    {
        return view('front_end.administracion.institucion');
    }

    public function clave(){

        return view('front_end.administracion.clave');
    }

    public function acercade(){

        return view('front_end.administracion.acercade');
    }



}
