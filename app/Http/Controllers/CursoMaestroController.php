<?php

namespace App\Http\Controllers;

use App\Models\Curso_Maestro;
use Illuminate\Http\Request;

class CursoMaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Curso_Maestro::all();
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
        $cursomaestro = new Curso_Maestro();
        $cursomaestro->curso_id = $request->curso_id;
        $cursomaestro->docente_id = $request->docente_id;
        $cursomaestro->save();
        return "Guardado correcto";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Curso_Maestro::where('curso_id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso_Maestro $curso_Maestro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cursomaestro = Curso_Maestro::find($id);
        $cursomaestro->curso_id = $request->curso_id;
        $cursomaestro->docente_id = $request->docente_id;
        $cursomaestro->save();
        return "Actualizado correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cursomaestro = Curso_Maestro::find($id);
        $cursomaestro->delete();
        return "Eliminado correctamente";
    }
}
