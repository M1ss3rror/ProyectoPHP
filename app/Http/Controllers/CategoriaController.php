<?php

namespace App\Http\Controllers;
use App\Pelicula;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Unique;

class CategoriaController extends Controller
{
    //Los controllers se coponen de métodos
    //Se puede nombrar como sea pero sin mayúsculas
    public function index(){
        //en el controladorvan las instrucciones a ejecutar
            //Seleccionar datos a traves del modelo

        $categorias = Categoria::paginate(5);
    //invocar vista, ingresar a ella el listado de categorías
    return view("categorias.index")->with("categorias" , $categorias);
    }
    
    //Acción create: Para mostrar el formulario 
    public function create(){
        return view("categorias.new");
    }

    //Acción store: Guardar la categoríaque viene desde el form
    public function store(){
        //Validar datos (MANUALMENTE)
            //Establecer reglas de validación para los campos
            $reglas = [
                "nombre" => ["required", "alpha", "min:4", "unique:category,name"]
            ];
            //Mensajes
            $mensajes = [
                "required" =>"Diligencie el formulario",
                "alpha" => "Solo letras",
                "min" => "Solo categorías de :min caracteres",
                "unique" => "Categoría Repetida"
            ];
        //Aplicar validación
        //Creas variable validador
        $validador = Validator::make($_POST, $reglas, $mensajes );
        //Con los datos y las reglas comparamos las reglas
        if($validador->fails()){
            //Si la validación falla, redirige el formulario
            return redirect("categorias/create")->withErrors($validador)->withInput();
        }else{
            //si no falla, pos normi-->

            //$_POST: Es un arreglo unidimencionalincorporado en PHP
        //almacena los datos en el formulario
        //Crear objeto categoria
        $categoria = new Categoria;
        //Asignar nombre
        $categoria->name=$_POST["nombre"];
        //guardar
        $categoria->save();
        //letrero de exito: Por medio de redireccionamiento 
        //redireccionamos a rutas que tengamos en el web.php
        return redirect('categorias/create')->with("exito","Categoría Registrada");

        }  
    }
    //mostrar el formulario de actualizar
    public function edit($idcategoria){
        //seleccionar la categoría
        $categoria = Categoria::find($idcategoria);
        //Llevar datos de categoría a la vista de edición
        return view('categorias.edit')->with("categoria", $categoria);
    }
        //Guardar la categoría actualizada
        public function update( ){
            //seleccionar categoria a editar
            $categoria = Categoria::find($_POST["id"]);
            //actualizamos atributos
            $categoria->name = $_POST["categoria"];
            //guardar cambios
            $categoria->save();
            echo "Cambios Guardados";
        }
}

class PeliculaController extends Controller{
    //acción para mostrar el catálogo de 'peliculas
    
}