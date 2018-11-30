<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Planificar extends Controller
{

    public function iniciar()
    {

        return view('front_end.planificacion.iniciar');
    }

    public function grilla()
    {

        return view('front_end.planificacion.grilla');
    }

    public function archivo(){

        return view('front_end.planificacion.archivo');
    }

    public function gestion(){


        return view('front_end.planificacion.gestion');
    }

}
