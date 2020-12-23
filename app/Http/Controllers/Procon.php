<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class Procon extends Controller
{
   
   public function index()
   {
       $data= product::all();
       return view('product',["products"=>$data]);
   }

   public function detail($detail)
   {

    $detail= product::find($detail);

    return view('details',["details" =>$detail]);


   }


   public function search(Request $s)
   {
       $data=product::where('name','like','%'.$s->input('psearch').'%')->get();
        return   view("search",[ "products"=>$data]);
   }


   public function addtocart(Request $req)
   {

    if($req->session()->has('user'))
    {

    

     $cart=new Cart;
      $cart->user_id=$req->session()->get('user')['id'];
       $cart->product_id=$req->product_id;
        $cart->save();

        return Redirect::back()->with('message','Operation Successful !');
        
    }
    else
    {
        return "not login /session not find";
    }

    
   }

  
 static function cartitem()
   {
       $userId=Session()->get('user')['id'];
       return Cart::where('user_id',$userId)->count();

   }

}
