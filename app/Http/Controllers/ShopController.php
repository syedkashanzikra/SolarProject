<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ShopController extends Controller
{
    public function shopfun(){
        $Products = Products::all();
        return view("Shop/shop",compact('Products'));
    }
    public function shoplayoutfun(){
       
        return view("Shop/shoplayout");
        
    }


//Search
public function shopsearch($input){


    $searchinput = $input."%";
    

        $Products = Products::where("Pro_Name" , "like" , $searchinput)->get();
        return json_encode($Products);
              
}

//GET ALL DATA
public function getalldata()
{
    $Products=Products::all();
    return json_encode($Products);
}

}