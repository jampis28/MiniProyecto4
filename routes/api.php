<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AlumnoCursoController;
use App\Http\Controllers\AsistenciaAlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CursoMaestroController;
use App\Http\Controllers\DocenteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(AlumnoController::class)->group(function () {
    Route::get('/alumno', 'index');
    Route::get('/alumno/{id}', 'show');
    Route::post('/alumno', 'store');
    Route::put('/alumno/{id}', 'update');
    Route::delete('/alumno/{id}', 'destroy');
});

Route::controller(DocenteController::class)->group(function () {
    Route::get('/docente', 'index');
    Route::get('/docente/{id}', 'show');
    Route::post('/docente', 'store');
    Route::put('/docente/{id}', 'update');
    Route::delete('/docente/{id}', 'destroy');
});

Route::controller(CursoController::class)->group(function () {
    Route::get('/curso', 'index');
    Route::get('/curso/{id}', 'show');
    Route::post('/curso', 'store');
    Route::put('/curso/{id}', 'update');
    Route::delete('/curso/{id}', 'destroy');
});

Route::controller(CursoMaestroController::class)->group(function () {
    Route::get('/cursomaestro', 'index');
    Route::get('/cursomaestro/{id}', 'show');
    Route::post('/cursomaestro', 'store');
    Route::put('/cursomaestro/{id}', 'update');
    Route::delete('/cursomaestro/{id}', 'destroy');
});

Route::controller(AlumnoCursoController::class)->group(function () {
    Route::get('/matricularalumno', 'index');
    Route::get('/matricularalumno/{id}', 'show');
    Route::post('/matricularalumno', 'store');
    Route::put('/matricularalumno/{id}', 'update');
    Route::delete('/matricularalumno/{id}', 'destroy');
});

Route::controller(AsistenciaAlumnoController::class)->group(function () {
    Route::get('/asistencia', 'index');
    Route::get('/asistencia/{id}', 'show');
    Route::post('/asistencia', 'store');
    Route::put('/asistencia/{id}', 'update');
    Route::delete('/asistencia/{id}', 'destroy');
});
