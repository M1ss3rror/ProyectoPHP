<?php

use App\Categoria;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*//Ruta de prueba
Route::get('prueba', function(){
    //definir un arreglo
    $estudiantes = [
        "Ana",
        "Jorge",
        "Maria"
    ];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});

Route::get('Paises', function(){
    $paises = [ "Colombia" => [
                    "Capital" => "Bogotá",
                    "Moneda" => "Peso",
                    "Población" => 55,
                    "Ciudades" => [
                        "Cali", "Medellín","Barranquilla"
                    ]
    ],
                "Ecuador" => [
                    "Capital" => "Quito",
                    "Moneda" => "Dolar",
                    "Población" => 10,
                    "Ciudades" => [
                        "Guayaquil", "Manta","Pichincha"
                    ]
                ],
                "Brasil" => [
                    "Capital" => "Brazilia",
                    "Moneda" => "Real",
                    "Población" => 220,
                    "Ciudades" => [
                        "Santos", "Sao Pablo","Bahia"
                    ]
                ]
             ];
     /*Solo se reconocen las variables declaradas en la ruta           
    echo "<pre>";
    var_dump($paises);
    echo "</pre>"; */

    /*foreach para recorrer el arreglo de paises(1ra dimención)
    foreach($paises as $pais => $infopais){
        echo "<h1> $pais </h1>";

        //recorrer datos (2da dimención)
        foreach($infopais as $dato => $valor){

            //al recorrer cada dato/ Ciudades (3ra dimención)
            if($dato == "Ciudades"){
                echo "<h2>Algunas ciudades:<h2>";
                echo "<ul>";
                foreach($valor as $ciudad){
                    echo "<li>$ciudad</li>";
                }
                echo "</ul>";
            }else{
            echo "<h2> $dato : $valor </h2>";
            }
        }
    echo "<hr>";

    }*/

    /*//Pasar el arreglo de paises a una vista
    return view("Paises")->with("Paises", $paises);
    

}); */

Route::get("categorias", function(){
    
});

//Ruta controlador
//controlador@metodo
Route::get('categorias', "CategoriaController@index");
//Añadir categoría
Route::get('categorias/create', "CategoriaController@create");
Route::post('categorias/store', "CategoriaController@store");
Route::get('categorias/edit/{idcategoria}', "CategoriaController@edit");
Route::post('categorias/update',"CategoriaController@update");
Route::get('peliculas', 'PeliculaController@index');

Route::get('Clientes/jsoncities/{id_pais}', 'LocationController@jsoncities');
Route::get('Clientes/create', 'ClienteController@create');