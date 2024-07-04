<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function layoutfun(){
        return view("Layouts/layout");
    }
}
