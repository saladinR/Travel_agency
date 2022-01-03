<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paiementController extends Controller
{
   public function index() {
       return view('front-end.paiement');
   }
}
