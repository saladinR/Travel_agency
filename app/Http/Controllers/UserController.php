<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show() {

        $users = User::select('id','name','email','email_verified_at','password','role','cle_par','updated_at','created_at')->get();
        // var_dump($news);
       
       
        return view('back-end.client.clientform',compact('users'));
      }
      public function store(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        
     
        
    ]);
       $data = $request->all();
       $check = $this->create($data);

       return redirect()->back()->with('status',' les informations son bien enregistrer '); 
            
    }
    public function create(array $data)
    {
        
        $rand = rand(9999,999999999);
        $cle ='PA'.$rand;
       
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role'=>$data['role'],
        'cle_par' =>$cle
        
      ]);
    }    

      
 
      public function update(Request $request,$id) {
        $name = $request->input('name');
        $email = $request->input('email');
        $email_verified_at = $request->input('email_verified_at');
        $password = $request->input('password');
        $role = $request->input('role');
        $cle_par = $request->input('cle_par');
        $remember_token = $request->input('remember_token');
      
        
        DB::update('update users set name = ?,email=?,email_verified_at=?,password=?,role=?, cle_par=?,remember_token=?  where id = ?',[$name,$email,$email_verified_at,$password,$role,$cle_par,$remember_token,$id]);
        return redirect()->back()->with('status',' utilisateur is modified');
        }
        
    public function destroy($id)
    {
        
      User::where('id', $id)->delete();
        
    
        return back()->with('danger', 'le client a étè supprimer');
    }
  
}
