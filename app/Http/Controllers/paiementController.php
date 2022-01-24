<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class paiementController extends Controller
{
      public function index(Request $request){

  
        Session::put('reservation',[ 'prix' => $request->get('prix'),'nbr_perso' => $request->get('nbr_perso'),'date_depart' => $request->get('date_depart'),'airport' => $request->get('airport'),
        'nuits' => $request->get('nuits'),'enfant' => $request->get('enfant'),'adulte' => $request->get('adulte'),'prixx' => $request->get('prixx'),]);
        
        
          return view('front-end.paiement');
      }
      public function info(Request $request){

      dd($request);
      exit;
       return $request;
       
      }

}