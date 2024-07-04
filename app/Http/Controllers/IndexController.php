<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function indexfun(){
        return view("index");
    }

    public function loginfun(){
        return view("login");
    }


}
