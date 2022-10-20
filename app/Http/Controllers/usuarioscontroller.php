<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class usuarioscontroller extends Controller
{
    function listar(){
        $alumnos = DB::table ('prueba')
        ->orderBy('edad','DESC')
        ->get();
        //dd ($alumnos);
        return view('listado',compact('alumnos'));
    }
}
