<?php

use App\Http\Controllers\Admin\PermissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use GuzzleHttp\Middleware;

Route::get('/', function(){
    return view('admin.dashboard');
    session()->flash('swal', [
        'type'=> 'success',
        'title'=> 'Oops...',
        'text'=> 'Something went wrong!',
        'icon'=> 'error',
        'footer'=> '<a href="#">Why do I have this issue?</a>'
    ]);
})//->middleware(['can:Acceso al dashboard'])
    ->name('dashboard');



Route::resource('roles', RoleController::class);//->middleware(['can:Crear roles'])->names('roles');

Route::resource('permissions', PermissionController::class);//->middleware(['can:Crear permisos'])->names('permissions');

Route::resource('users', UserController::class)->names('users');//->middleware(['can:Crear usuarios'])->except('show', 'store');
