<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    function index(){
        $servicios = Servicio::all();
        return view('servicios.index', ['servicios'=>$servicios]);
    }
    
    function show($id){
        $servicio = Servicio::find($id);
        return view('servicios.show', ['servicio'=>$servicio]);
    }
    
    public function create(){
        return view('servicios.create');
    }

    public function store(Request $request){
        $servicio = new Servicio();
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->precio = $request->precio;
        $servicio->save();
        return redirect()->route('servicios.index');
    }

    public function destroy($id){
        $servicio = Servicio::find($id);
        $servicio->delete();
        return redirect()->route('servicios.index');
    }

    function edit($id){
        $servicio = Servicio::find($id);
        return view('servicios.edit', ['servicio'=>$servicio]);
    }
    
    public function update(Request $request, $id){
        $servicio = Servicio::find($id);
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->precio = $request->precio;
        $servicio->save();
        return redirect()->route('servicios.index');
    }
}
