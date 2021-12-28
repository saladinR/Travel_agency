<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('front-end.contact');
    }
    public function create(Request $request){

        $this->validate($request, [
                
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
         

    ]);
    Contact::create($request->all());
    
            // 
            return back()->with('success', 'Les informations sont bien enregistrés');
    }
    public function show() {

        $contacts = Contact::select('id','name','email','subject','message')->get();
        // var_dump($news);
       
       
        return view('back-end.contact.contactform',compact('contacts'));
      }

     
      public function destroy($id)
    {
        
        Contact::where('id', $id)->delete();
        
    
        return back()->with('danger', 'le message a étè supprimer');
    }
    
}
