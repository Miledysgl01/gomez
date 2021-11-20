<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serpiente extends Controller
{
    //
    public function Guardar(Request $request){
        $serpiente = new Serpiente;
        $serpiente->Nombre = $request->Nombre;
        $serpiente->Apellidos = $request->Apellidos;
        $serpiente->Edad = $request->Edad;
        $serpiente->Tipo_de_sangre = $request->Tipo_de_sangre;
        $serpiente->Telefono_Celular = $request->Telefono_Celular;
        $serpiente->Numero_cedula = $request->Numero_cedula;
        $serpiente->hijos = $request->hijos;
        $serpiente->Tipo = $request->Tipo;

        //$serpiente->();
        return view("formulario");
}
}