<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

class CustomAuthController extends Controller
{

    public function index()
    {
       
        $cle_par = 'PA00000';

        if (User::where('cle_par',$cle_par )->first() === null) {

            $data =  new User;
        
            $data->name = "yves";
            $data->email = "test@gmail.com";
            $data->password = Hash::make("123456");
            $data->cle_par = "PA00000";
            $data->role ='admin';
    
            $data->save();
         
         }
        

        return view('front-end.index');
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            
        ]);
   
        $credentials = $request->only('email', 'password','role');
        

      
        
       

        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 'admin') {
                return redirect()->route('admin');
            }else{
            return redirect()->route('home');
        }
                        
        }
       
        
        return back()->with('danger', 'login et le mot de passe incorrecte');
    }



    public function registration()
    {
        return view('front-end.index');
    }
      

    public function customRegistration(Request $request)
    {  
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'cle_paro' =>'required|min:6'
         
            
        ]);
        $test = $request->cle_paro;
        $test2 = User::where('cle_par',$test )->first();
        if($test2){
            $data = $request->all();
            $check = $this->create($data);
            
             
            return back()->with('success', 'Les informations sont bien enregistrés');
        }else{
            return back()->with('danger', "le code de parrainage n est pas valide");
        }
         
        
    }


    public function create(array $data)
    {
        
        $rand = rand(9999,999999999);
        $cle ='PA'.$rand;
        $role = 'user';
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role'=>$role,
        'cle_par' =>$cle
        
      ]);
    }    
    

    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('dashboard');
    //     }
  
    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}