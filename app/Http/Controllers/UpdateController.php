<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UpdateController extends Controller
{
    public function updatefun(){
        return view("Dashboard/updateuser");
    }

    public function UserProfileEditPost($record,Request $req)
    {

        $ProfUpdate = User::where('id', $record)->first();   
            
        if($req->UpdateName != "" && $req->UpdateEmail != "" && $req->UpdatePassword != "")
        {

            $ProfUpdate->name = $req->UpdateName;
            $ProfUpdate->email = $req->UpdateEmail;
            $ProfUpdate->admin = $req->UpdateRole;
            $ProfUpdate->password = $req->UpdatePassword;
        
            $ProfUpdate->update();
            return redirect()->back();
        }else
        {
            dd('error');
        }
     
        
    }

}
