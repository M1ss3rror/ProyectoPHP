<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //atributos correspondientes
    protected $table = "category";
    protected $primaryKey ="category_id";
    public $timestamps = false;

    //Métodoque relacione la Categoría con las películas
    public function peliculas(){
        return $this->belongsToMany('App\Pelicula', 'film_category', 'category_id', 'film_id');
    }
}