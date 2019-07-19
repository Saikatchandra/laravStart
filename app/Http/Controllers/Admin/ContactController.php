<?php

namespace App\Http\Controllers\Admin;

use App\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
     public  function index(){

        $contacts = contact::all();
        return view('admin.contact.index',compact('contacts'));
     }

     public  function show($id){
        $contact = contact::find($id);
        return view('admin.contact.show',compact('contact'));  

     }

     public function destroy($id){
          $contact = contact::find($id);
          $contact->delete();
          return redirect()->back();
     }


}
