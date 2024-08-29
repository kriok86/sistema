<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $registros = Registro::all();
        
        return view('welcome', compact('registros'));
    }
}
