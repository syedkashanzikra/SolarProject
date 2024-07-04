<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Mail;

class AnaliyzeController extends Controller
{


    public function analyzefun()
    {
        return view("Consult.analyze"); 
    }
  

    //Email
    public function emailfun(Request $req)
    {
        $data = [
            'body'=>'Counsult'
        ];

        $mail = $req->mailinp;

        Mail::send("Email.email",$data,function($message) use ($mail) {
            $message->subject("Solar Consult");
            $message->to($mail);
        });
        return redirect("/");  
    }
}
