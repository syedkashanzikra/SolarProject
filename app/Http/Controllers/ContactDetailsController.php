<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactDetailsController extends Controller
{
    public function condetailsfun(){
        $contactdetails = ContactUs::all();
        return view("Dashboard/contact-details",compact('contactdetails'));
    }

    //Insert

    public function contactinsert(Request $req){
        $Post = new ContactUs;

        $Post->Name = $req->nameinp;
        $Post->Email = $req->emailinp;
        $Post->Phone = $req->phoneinp;
        $Post->Message = $req->messageinp;
        $Post->save();

        return redirect()->back();
    }

    //Delete

    public function deletefun($id){
        $contactdelete = ContactUs::find($id);
        $contactdelete->delete();
        return redirect()->back();
    }

    //Search
    public function contactsearch($input)
    {
        // Search contacts based on the input
        $contacts = ContactUs::where('Name', 'like', "%{$input}%")->get();
    
        // Return as JSON response
        return response()->json($contacts);
    }
    
    
    public function getAllContacts()
{
    // Fetch all contacts
    $contacts = ContactUs::all();

    // Return as JSON response
    return response()->json($contacts);
}

    
    //GET ALL DATA
    public function getalldatacontact()
    {
        $contacts=ContactUs::all();
        return json_encode($contacts);
    }

}
