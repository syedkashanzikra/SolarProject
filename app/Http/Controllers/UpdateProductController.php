<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class UpdateProductController extends Controller
{
    public function updateprofun($id){
        $Products = Products::find($id);
        return view("Dashboard/update-pro",compact('Products'));
    }

    public function updateproduct($record,Request $req)
    {

        $Post = Products::where('id', $record)->first();   
            
        if($req->ProName != "" && $req->ProPrice != "" && $req->Prourl != "" && $req->ProDecs != "")
        {

        $Post->Pro_Name = $req->ProName;
        $Post->Pro_Price = $req->ProPrice;
        $Post->Pro_Url = $req->Prourl;
        $Post->Pro_Decs = $req->ProDecs;
            
            $Post->update();

            return redirect()->back();
            
        }else
        {
            dd('error');
        }
     
        
    }
}
