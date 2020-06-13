<?php

namespace App\Http\Controllers;
use App\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    //acción para mostrar el catalogo de pelicula
    public function index(){
        //Seleccionar todas las peliculas
     $peliculas = Pelicula::paginate(5);  
     //Enviarlas a una vista
     return view('peliculas.index')->with('peliculas',$peliculas);

    }
}
