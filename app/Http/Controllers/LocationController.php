<?php

namespace App\Http\Controllers;
use App\Country;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //Obtener las ciudades de un país
    public function jsoncities($id_pais){
        return $cities = Country::find($id_pais)->cities()->get()->tojson();
        //var_dump($cities);
    }
}
