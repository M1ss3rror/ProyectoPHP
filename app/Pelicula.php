<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table="film";
    protected $primaryKey = "film_id";
    public $timestamps = false;

    //Metodo para encontrar las categorias a las  que pertenece la pelicula (* a *)
    public function categorias(){
        return $this->belongsToMany('App\Categoria','film_category', 'film_id','category_id');
    }

    public function idioma(){
        //Retornar el inverso de la relación * a 1
        return $this->belongsTo('App\Idioma', 'language_id');

    }

    public function actor(){
        //REtorna el inverso de la relación * a *
        return $this->belongsToMany('App\actor' , 'film_actor' , 'film_id' , 'actor_id');
    }
    
}
