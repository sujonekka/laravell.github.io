<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class weathercontrolller extends Controller
{
    function getweather($city = null){

        if(!$city){
            return "please mention a city";
        }

        return "Weathe of {$city} is very good";

    }
}
