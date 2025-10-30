<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;

class HabitacionesController extends Controller
{
    function index(){
        $habitaciones = Habitacion::all();
        return view('habitaciones.index', ['habitaciones'=>$habitaciones]);
    }
    
    function show($id){
        $habitacion = Habitacion::find($id);
        return view('habitaciones.show', ['habitacion'=>$habitacion]);
    }
    
    public function create(){
        return view('habitaciones.create');
    }

    public function store(Request $request){
        $habitacion = new Habitacion();
        $habitacion->numero = $request->numero;
        $habitacion->tipo = $request->tipo;
        $habitacion->precio = $request->precio;
        $habitacion->estado = $request->estado ?? 'Disponible';
        $habitacion->save();
        return redirect()->route('habitaciones.index');
    }

    public function destroy($id){
        $habitacion = Habitacion::find($id);
        $habitacion->delete();
        return redirect()->route('habitaciones.index');
    }
    
    function edit($id){
        $habitacion = Habitacion::find($id);
        return view('habitaciones.edit', ['habitacion'=>$habitacion]);
    }
    
    public function update(Request $request, $id){
        $habitacion = Habitacion::find($id);
        $habitacion->numero = $request->numero;
        $habitacion->tipo = $request->tipo;
        $habitacion->precio = $request->precio;
        $habitacion->estado = $request->estado;
        $habitacion->save();
        return redirect()->route('habitaciones.index');
    }
}
