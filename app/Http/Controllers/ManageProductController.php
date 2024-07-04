<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ManageProductController extends Controller
{
    public function manageprofun(){
        $Products = Products::all();
        return view("Dashboard/manage-pro",compact('Products'));
    }

     //Delete

     public function prodeletefun($id){
        $userdelete = Products::find($id);
        $userdelete->delete();
        return redirect()->back();
    }

  //Search
public function managesearch($input){


    $searchinput = $input."%";
    

        $Products = Products::where("Pro_Name" , "like" , $searchinput)->get();
        return json_encode($Products);
              
}

//GET ALL DATA
public function getalldatamanage()
{
    $Products=Products::all();
    return json_encode($Products);
}
}
