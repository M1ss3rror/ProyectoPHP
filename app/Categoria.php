<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //atributos correspondientes
    protected $table = "category";
    protected $primaryKey ="category_id";
    public $timestamps = false;
}
