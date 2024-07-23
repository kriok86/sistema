<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use App\Models\Antiguedad;
use App\Models\Cantpersonas;
use App\Models\Estudiosuperior;
use App\Models\Grupofamiliar;
use App\Models\Informe;
use App\Models\Ingreso;
use App\Models\Obra;
use App\Models\Punto;
use App\Models\Registro;
use App\Models\Residencia;
use App\Models\tenencia;
use App\Models\Tipovivienda;
use App\Models\Trabajo;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registro = Registro::all();

        return view('inscripciones.inscripcion.index', compact('registro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $antiguedad = Antiguedad::all();
        $vivienda = Tipovivienda::all();
        $residencia = Residencia::all();
        $tenencia = tenencia::all();
        $personas = Cantpersonas::all();
        $estudios = Estudiosuperior::all();
        $obra = Obra::all();
        $informe = Informe::all();
        $ingreso = Ingreso::all();
        $familia = Grupofamiliar::all();
        $trabajo = Trabajo::all();
        $ubicacion = Ubicacion::all();
        $punto = Punto::all(); 
        
        return view('inscripciones.inscripcion.create', compact('antiguedad', 'vivienda', 'residencia', 'tenencia','personas', 'estudios', 'obra', 'informe', 'ingreso', 'familia', 'trabajo','ubicacion', 'punto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'dni'=>'required|unique:registros',
            'telefono'=>'required',
            'antiguedad_id'=>'required',
            'tipovivienda_id'=>'required',
            'residencia_id'=>'required',
            'tenencia_id'=>'required',
            'cantpersona_id'=>'required',
            'estudiosuperior_id'=>'required',
            'obra_id'=>'required',
            'informe_id'=>'required',
            'ingreso_id'=>'required',
            'grupofamiliar_id'=>'required',
            'trabajo_id'=>'required',
            'ubicacion_id'=>'required',
            'punto_id'=>'required',
        ]);
        $data['user_id'] = auth()->user()->id;
        $registro= Registro::create($data);
        return redirect()->route('inscripcion.inscripcion.index', $registro);
        //faltaria guardar el registro creado
    }

    /**
     * Display the specified resource.
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
