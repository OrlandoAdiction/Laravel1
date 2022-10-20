<?php

use Illuminate\Support\Facades\Route;
//Llamamos a todos los controladores que usaremos
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\evelynController;
use App\Http\Controllers\CustomerController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {

return view('welcome');                                                
});
Route::get('/usuarios', function() {
    return "Aqui van los usuarios";

});
Route::get('/usuarios2',
[UsuariosController::class, 'listar']
);
Route::get('/productos',
[productoController::class, 'listar']
);
Route::get('/evelyn',
[evelynController::class, 'listar']
);
Route:: get('/clientes',[CustomerController::class,'listar']); 