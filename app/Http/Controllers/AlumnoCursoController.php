<?php

namespace App\Http\Controllers;

use App\Models\Alumno_Curso;
use Illuminate\Http\Request;

class AlumnoCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumno_Curso::all();
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
        $alumnocurso = new Alumno_Curso();
        $alumnocurso->alumno_id = $request->alumno_id;
        $alumnocurso->curso_id = $request->curso_id;
        $alumnocurso->save();
        return "Guardado correcto";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Alumno_Curso::where('alumno_id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumnocurso = Alumno_Curso::find($id);
        $alumnocurso->alumno_id = $request->alumno_id;
        $alumnocurso->curso_id = $request->curso_id;
        $alumnocurso->save();
        return "Actualizado correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumnocurso = Alumno_Curso::find($id);
        $alumnocurso->delete();
        return "Eliminado correctamente";
    }
}
