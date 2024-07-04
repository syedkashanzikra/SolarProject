<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function dasboardfun(){
        $users = User::all();
        return view("Dashboard/dashboard",compact('users'));
    }

    //Delete

    public function userdeletefun($id){
        $userdelete = User::find($id);
        $userdelete->delete();
        return redirect()->back();
    }

    //Search
public function usersearch($input){


    $searchinput = $input."%";
    

        $users = User::where("name" , "like" , $searchinput)->get();
        return json_encode($users);
              
}

//GET ALL DATA
public function getalldatauser()
{
    $users=User::all();
    return json_encode($users);
}

}
