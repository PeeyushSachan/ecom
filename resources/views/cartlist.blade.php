
@extends('master')




@section('content')


<h2>this is our cart</h2>
<a class="btn btn-warning col-sm-2 float-right" href="/ordernow">Order Now-></a>
<div class="container custom-product bg-gary">   
   
@foreach($products as $product )


<div class="card col-sm-4 col-6"> <div class="item"> <a href="detail\{{$product->id}}"><div class="card-header"><img height="200px" width="auto" src="{{$product->gallery}}"/></div></a> <div class="card-header" ><h5 class="text-center">Rs.{{$product->price}}</h5></div> <div class="px-4 py-1"> <a href="cartremove/{{$product->cart_id}}" class="btn btn-danger">Remove</a>  </div></div>
</div>
 @endforeach



</div>



@endsection