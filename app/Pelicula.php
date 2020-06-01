<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table="film";
    protected $primarykey = "film_id";
    public $timestamps = false;
}
