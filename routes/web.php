<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HabitacionesController;
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
    return view('welcome');
});

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');
Route::get('/servicios/create', [ServiciosController::class, 'create'])->name('servicios.create');
Route::post('/servicios', [ServiciosController::class, 'store'])->name('servicios.store');
Route::get('/servicios/{id}', [ServiciosController::class, 'show'])->name('servicios.show');
Route::get('/servicios/{id}/edit', [ServiciosController::class, 'edit'])->name('servicios.edit');
Route::put('/servicios/{id}', [ServiciosController::class, 'update'])->name('servicios.update');
Route::delete('/servicios/{id}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');

Route::get('/empleados', [EmpleadosController::class, 'index'])->name('empleados.index');
Route::get('/empleados/create', [EmpleadosController::class, 'create'])->name('empleados.create');
Route::post('/empleados', [EmpleadosController::class, 'store'])->name('empleados.store');
Route::get('/empleados/{id}', [EmpleadosController::class, 'show'])->name('empleados.show');
Route::get('/empleados/{id}/edit', [EmpleadosController::class, 'edit'])->name('empleados.edit');
Route::put('/empleados/{id}', [EmpleadosController::class, 'update'])->name('empleados.update');
Route::delete('/empleados/{id}', [EmpleadosController::class, 'destroy'])->name('empleados.destroy');

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}', [ClientesController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{id}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

Route::get('/habitaciones', [HabitacionesController::class, 'index'])->name('habitaciones.index');
Route::get('/habitaciones/create', [HabitacionesController::class, 'create'])->name('habitaciones.create');
Route::post('/habitaciones', [HabitacionesController::class, 'store'])->name('habitaciones.store');
Route::get('/habitaciones/{id}', [HabitacionesController::class, 'show'])->name('habitaciones.show');
Route::get('/habitaciones/{id}/edit', [HabitacionesController::class, 'edit'])->name('habitaciones.edit');
Route::put('/habitaciones/{id}', [HabitacionesController::class, 'update'])->name('habitaciones.update');
Route::delete('/habitaciones/{id}', [HabitacionesController::class, 'destroy'])->name('habitaciones.destroy');


