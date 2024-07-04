<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class InsertProductController extends Controller
{
    public function insertprofun(){
        return view("Dashboard/insert-pro");
    }

    public function productinsert(Request $req){
        $Post = new Products;

        $Post->Pro_Name = $req->ProName;
        $Post->Pro_Price = $req->ProPrice;
        $Post->Pro_Url = $req->Prourl;
        $Post->Pro_Decs = $req->ProDecs;
        if($req->hasFile('ProImage')){
            $image=$req->file('ProImage');
            $imagefile= time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('insert-image'), $imagefile);
            $Post->Pro_Image=$imagefile;
        $Post->save();
        return redirect()->back();
        }
    }
}
