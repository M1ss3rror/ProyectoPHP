<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //accion get para mostrar formulario
    public function create(){
        //traer paises
        $paises = Country::all();
        return view('Clientes.new')
            ->with("paises", $paises);
    }
}
