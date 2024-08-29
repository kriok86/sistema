<?php

use App\Http\Controllers\Empleado\RegistroController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function(){
    return view('inscripcion.dashboard');
});*/
Route::redirect('/','/inscripcion')->name('home');

/* RUTAS DEL REGISTRO DE INSCRIPCIONES*/

Route::resource('/inscripcion',RegistroController::class);//->middleware('can:Leer registro, Crear registro')->names('inscripcion');