<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }


    public function clientes($id_cliente=null){
        $cliente = Cliente::all();
        // echo($cliente);
        return view('clientes', ['id_cliente' => $id_cliente]);
    }

    public function registrar(){
        return view('registro');
    }
}
