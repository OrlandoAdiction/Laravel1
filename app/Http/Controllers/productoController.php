<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoController extends Controller
{
    function  listar() {
        return view("productos");
    }
}
