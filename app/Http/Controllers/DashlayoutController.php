<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashlayoutController extends Controller
{
    public function dashlayoutfun(){
        return view("Layouts/dash-layout");
    }
}
