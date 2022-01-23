<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function desContact()
    {
        $contact_des=Contact::first();
        return view('admin.contact',compact('contact_des'));
    }
    
    public function desUpdate (Request $request)
    {
        //error checking --it's mean when some field data missing , then see error
        $this->validate($request, [
            'top_des' => 'required',
        ]);
    
        //data send database
        $contact_des = Contact::first();
        $contact_des->top_des = $request->top_des;
        
        $contact_des->save();
    
        return redirect()->back()->with('status', "Contact Description data has been updated successfully");
    }
}
