<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm1;

class ControladorPaginas extends Controller
{
    function Fhome (){
        return view('home');
    }
    function Fingresar (){
        return view ('ingresar');
    }

    function Frecuerdos ($nombre='Invitado'){
        $arrNombres =['Carlos', 'Adriana','Luis'];
        return view ('recuerdos', compact('nombre','arrNombres'));
    }


    public function procesarRecuerdos(validadorForm1 $req){
        return redirect ('/ingresar')->with ('confirmacion', 'Tu recuerdo llego al controlador');
    }

    /*
    public function procesarRecuerdos(Request $req){
        if(request()->filled('txtTitulo')){
            return "Se llenó el título:".request()->input('txtTitulo');
        }
        return 'No se lleno el titulo';
    }
    */

}

