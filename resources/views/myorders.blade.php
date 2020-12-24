
@extends('master')




@section('content')


<h2>Myorders</h2>

<div class="container custom-product bg-gary">   
   
@foreach($products as $product )


<div class="card col-sm-4 col-6"> <div class="item"> 
    <a href="detail\{{$product->id}}"><div class="card-header">
        <img height="200px" width="auto" src="{{$product->gallery}}"/></div>
    </a> <div class="card-header" >
        <h5 class="text-center">Rs.{{$product->price}}
        </h5>
        <h5 class="text-center">address.{{$product->address}} </h5>
         <h5 class="text-center">status.{{$product->status}} </h5> 
         <h5 class="text-center">method.{{$product->payment_method}} </h5>
        

        
        
    </div></div>
</div>
 @endforeach





</div>



@endsection