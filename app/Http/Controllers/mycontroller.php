<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    function ipcheck(Request $req):string{

        return  $req->ip();

    }
}
