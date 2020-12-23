<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class Mcon extends Controller
{
  public function Mfun(){

    return view('login');
  }

  public function login(Request $req){

      $user=User::where(['email'=>$req->lemail])->first();

    
   
   if($user && Hash::check($req->lpass, $user->pass))
    {
      $req->session()->put('user', $user);
        return redirect('home');
    }

    else{

     
        return "pass and  email not match";
    

    }
  }

public function logout()
{
  Session::forget('user');
  return redirect('/login');
}

}
