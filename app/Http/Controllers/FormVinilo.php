<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FormVinilo extends Controller
{
    function guardarVinilo(Request $request){

        $vinilo = new FormVinilo;
        $vinilo->interprete = $request->input("interprete");        
        $vinilo->album = $request->input("album");
        $vinilo->disquera = $request->input("disquera");
        $vinilo->lanzamiento = $request->input("lanzamiento");
        $vinilo->Ncanciones=$request->input("Ncanciones");
        $vinilo->cantidad = $request->input("cantidad");
        $vinilo->pCompra = $request->input("pCompra");
        $vinilo->pVenta = $request->input("pVenta");
        $vinilo->save();
        return view("FormVinilos");
    }
    }
?>







