<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumno::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->correo_electronico = $request->correo_electronico;
        $alumno->contrasena = $request->contrasena;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return "Guardado correcto";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Alumno::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->correo_electronico = $request->correo_electronico;
        $alumno->contrasena = $request->contrasena;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return "Actualizado correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return "Eliminado correctamente";
    }
}
