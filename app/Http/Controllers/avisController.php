<?php

namespace App\Http\Controllers;
use App\Models\avis;
use Illuminate\Http\Request;

class avisController extends Controller
{
  
    public function create(Request $request){
      
        $this->validate($request, [
                
            'star' => 'required',
            'email' => 'required',
            'message' => 'required',
         

    ]);
   
    avis::create($request->all());
    
            // 
            return back()->with('success', 'Les informations sont bien enregistrés');
    }
    public function show() {

        $avis = avis::select('id','star','email','message')->get();
        // var_dump($news);
       
       
        return view('back-end.avis.avis',compact('avis'));
      }
      public function destroy($id)
      {
          
          avis::where('id', $id)->delete();
          
      
          return back()->with('danger', 'avis a étè supprimer');
      }
     
}
