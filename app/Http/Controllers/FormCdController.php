<?php

namespace App\Http\Controllers;

use App\Models\FormCD;
use Illuminate\Http\Request;

class FormCdController extends Controller
{
    function guardarCD(Request $request){

        $CD = new FormCD();
        $CD->interprete = $request->input("interprete");        
        $CD->descripcion = $request->input("descripcion");
        $CD->NCanciones = $request->input("NCanciones");
        $CD->cantidad = $request->input("cantidad");
        $CD->pCompra = $request->input("pCompra");
        $CD->pVenta = $request->input("pVenta");
        $CD->fecha_ingreso = $request->input("fecha_ingreso");
        $CD->save();
        return view("FormCD");
    }
    }
?>



