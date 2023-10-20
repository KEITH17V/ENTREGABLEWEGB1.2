<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

//login
Route::get('/', [LoginController::class,'index'])->name('login');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');


Route::get('/main', [MainController::class,'index'])->name('main');


Route::get('/instructores', 'InstructoresController@index')->name('instructores.index');


//alumnos
Route::get('alumnos', [AlumnoController::class, 'index'])->name("alumnos.index");
Route::get('alumnos/create', [AlumnoController::class, 'create'])->name("alumnos.create");
Route::post('alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('alumnos/{idAlumno}', [AlumnoController::class, 'show'])->name("alumnos.show");
Route::get('alumnos/{idAlumno}/edit', [AlumnoController::class, 'edit'])->name("alumnos.edit");
Route::put('alumnos/{idAlumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::delete('alumnos/{idAlumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');

//Instructores

Route::get('instructores', [InstructorController::class, 'index'])->name("instructores.index");
Route::get('instructores/create', [InstructorController::class, 'create'])->name("instructores.create");
Route::post('instructores', [InstructorController::class, 'store'])->name('instructores.store');
Route::get('instructores/{idInstructor}', [InstructorController::class, 'show'])->name("instructores.show");
Route::get('instructores/{idInstructor}/edit', [InstructorController::class, 'edit'])->name("instructores.edit");
Route::put('instructores/{idInstructor}', [InstructorController::class, 'update'])->name('instructores.update');
Route::delete('instructores/{idInstructor}', [InstructorController::class, 'destroy'])->name('instructores.destroy');

//Cursos

Route::get('cursos', [CursoController::class, 'index'])->name("cursos.index");
Route::get('cursos/create', [CursoController::class, 'create'])->name("cursos.create");
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('cursos/{idCurso}', [CursoController::class, 'show'])->name("cursos.show");
Route::get('cursos/{idCurso}/edit', [CursoController::class, 'edit'])->name("cursos.edit");
Route::put('cursos/{idCurso}', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('cursos/{idCurso}', [CursoController::class, 'destroy'])->name('cursos.destroy');


