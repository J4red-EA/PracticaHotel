<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    function index(){
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes'=>$clientes]);
    }
    
    function show($id){
        $cliente = Cliente::find($id);
        return view('clientes.show', ['cliente'=>$cliente]);
    }
    
    public function create(){
        return view('clientes.create');
    }
    
    public function store(Request $request){
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    public function destroy($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
    
    function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit', ['cliente'=>$cliente]);
    }
    
    public function update(Request $request, $id){
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return redirect()->route('clientes.index');
    }
}
