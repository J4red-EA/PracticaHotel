<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadosController extends Controller
{
    //
    function index(){
        $empleados=Empleado::all();
        return view('empleados.index', ['empleados'=>$empleados]);
    }
    function show($id){
        $empleado=Empleado::find($id);
        return view('empleados.show', ['empleado'=>$empleado]);
    }
    public function create(){
        return view('empleados.create');
    }

    public function store(Request $request){
        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    public function destroy($id){
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->route('empleados.index');
     }
     function edit($id){
        $empleado=Empleado::find($id);
        return view('empleados.edit', ['empleado'=>$empleado]);
    }
    public function update(Request $request, $id){
        $empleado = Empleado::find($id);
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->save();
        return redirect()->route('empleados.index');
    }
}
