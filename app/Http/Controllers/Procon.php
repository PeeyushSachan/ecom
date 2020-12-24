<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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


  public function cartlist()
  {

    $userId=Session::get('user')['id'];
    $product=DB::table('cart')
    ->join('product','cart.product_id','product.id')
    ->select('product.*','cart.id as cart_id')
    ->where('cart.user_id',$userId)
    ->get();
return view('cartlist',["products"=>$product]);

       
  }

  public function cartremove($productId)
  {
   // $userId=Session::get('user')['id'];
    // $cart=new Cart;
     Cart::destroy($productId);
     return Redirect::back();


  }


  public function ordernow()
  {
    $userId=Session::get('user')['id'];
   $totalprices=DB::table('cart')
    ->join('product','cart.product_id','product.id')
    ->where('cart.user_id',$userId)
    ->sum('product.price');

return view('ordernow',["totalprice"=>$totalprices]);
    
  }

  public function orderplace(Request $req)
  {
    $userId=Session::get('user')['id'];
    $allCart=Cart::where('user_id',$userId)->get();
    foreach($allCart as $cart)
    {
      $order=new Order;
      $order->product_id=$cart->product_id;
      $order->user_id=$userId;
      $order->address=$req->address;
      $order->status="pending";
      $order->payment_method=$req->payment;
      $order->payment_status="undefind";
      $order->save();

      Cart::where('user_id',$userId)->delete();

      					


    }
    
    Cart::where('user_id',$userId)->delete();
 return redirect('/home');
  }


  public function myorders()
  {

    $userId=Session::get('user')['id'];
    $product=DB::table('order')
    ->join('product','order.product_id','product.id')
    ->where('order.user_id',$userId)
    ->get();
return view('myorders',["products"=>$product]);

  }
}
