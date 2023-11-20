<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Alumno_Curso;
use App\Models\Asistencia;
use App\Models\Asistencia_Alumno;
use Database\Factories\AsistenciaFactory;
use Illuminate\Http\Request;

class AsistenciaAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistenciaalumno = Asistencia_Alumno::all();
        foreach ($asistenciaalumno as $asistencia) {
            $alumnocurso = $asistencia->alumnocurso_id = Alumno_Curso::where('id', $asistencia->alumnocurso_id)->get("alumno_id");
            $estudiante = Alumno::where('id', $alumnocurso[0]['alumno_id'])->get('nombre');
            $asistencia->alumnocurso_id = $estudiante[0]['nombre'];

            $asistencias = Asistencia::where('id', $asistencia->asistencia_id)->get('simbolo');
            $asistencia->asistencia_id = $asistencias[0]['simbolo'];
        }
        return $asistenciaalumno;
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
        $alumnocurso = new Asistencia_Alumno();
        $alumnocurso->alumnocurso_id = $request->alumnocurso_id;
        $alumnocurso->asistencia_id = $request->asistencia_id;
        $alumnocurso->fecha = $request->fecha;
        $alumnocurso->save();
        return "Guardado correcto";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $asistenciaalumno = Asistencia_Alumno::find($id);
        $alumnocurso = $asistenciaalumno->alumnocurso_id = Alumno_Curso::where('id', $asistenciaalumno->alumnocurso_id)->get("alumno_id");
        $estudiante = Alumno::where('id', $alumnocurso[0]['alumno_id'])->get('nombre');
        $asistenciaalumno->alumnocurso_id = $estudiante[0]['nombre'];

        $asistencia = Asistencia::where('id', $asistenciaalumno->asistencia_id)->get('simbolo');
        $asistenciaalumno->asistencia_id = $asistencia[0]['simbolo'];
        return ($asistenciaalumno);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia_Alumno $asistencia_Alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumnocurso = Asistencia_Alumno::find($id);
        $alumnocurso->alumnocurso_id = $request->alumnocurso_id;
        $alumnocurso->asistencia_id = $request->asistencia_id;
        $alumnocurso->fecha = $request->fecha;
        $alumnocurso->save();
        return "Actualizado correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumnocurso = Asistencia_Alumno::find($id);
        $alumnocurso->delete();
        return "Eliminado correctamente";
    }
}
