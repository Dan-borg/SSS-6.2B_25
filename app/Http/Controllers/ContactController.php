<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //Return a list all contacts
    function(){
        return view('contacts.index');
    }
    
    //Return a create contact form
    function(){
        return view('contacts.create');
    }

    function show($id){
         $contact = App\Models\Contact::find($id);//retrieve the contact from obj
        return view('contacts.show', compact('contact')); //convert the obj to array
    }

}
