<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class Mcon extends Controller
{
  public function Mfun(){

    return view('login');
  }

  public function login(Request $req){

      $user=User::where(['email'=>$req->lemail])->first();

    
   
   if($user && Hash::check($req->lpass, $user->pass))
    {
      $req->session()->put('sesuser', $user->name);
        return redirect('welcome');
    }

    else{

     
        return "pass and  email not match";
    

    }
  }



}
