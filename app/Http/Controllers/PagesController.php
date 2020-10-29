<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }


    // public function clientes($id_cliente=null){
    public function clientes(){
        // $cliente = Cliente::all();
        // echo($cliente[0]);
        // $id_cliente = $cliente[0]->id_cliente;
        // echo($id_cliente);
        // return view('clientes', ['id_cliente' => $id_cliente]);
        return view('clientes');
    }

    public function consulta(Request $request){
        // return $request->all();
        // $cliente = new Cliente;
        $request->validate([
            'nombre'=>'required'
        ]);
        $cliente = Cliente::where('nombre', $request->nombre)->get();
        $cliente = $cliente[0];
        // $cliente->nombre = $request->nombre;
        // echo($cliente);
        // $nombre
        // $correo
        // $telefono
        // $celular
        // $whatsapp
        // $direccion
        // return $cliente;
        return view('clientes', compact('cliente'));
        // return back();
    }

    public function registro(){
        return view('registro');
    }

    public function registrar(Request $request){
        // return $request->all();
        $request->validate([
            'nombre'=>'required',
            'celular'=>'required',
        ]);
        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        if($request->telefono == ""){
            $cliente->telefono = 'no tiene';
        }else{
            $cliente->telefono = $request->telefono;
        }
        $cliente->celular = $request->celular;
        if($request->whatsapp == "si"){
            $cliente->whatsapp = 1;
        }else{
            $cliente->whatsapp = 0;
        }        
        if($request->correo == ""){
            $cliente->correo = 'no tiene';
        }else{
            $cliente->correo = $request->correo;
        }
        // $cliente->direccion = $request->direccion;
        $cliente->save();
        return back()->with('mensaje', 'Cliente registrado con exito!!');
        // return view('registro');
    }
}
