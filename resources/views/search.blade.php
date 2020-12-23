
@extends('master')




@section('content')


<h2>THis is our search reasult</h2>
<div class="container custom-product bg-gary">   
   
@foreach($products as $product )


<div class="card"> <div class="item"> <a href="detail\{{$product->id}}"><div class="card-header"><img height="200px" width="auto" src="{{$product->gallery}}"/></div></a> <div ><h5 class="text-center">Rs.{{$product['price']}}</h5></div> <div class="px-4 py-1"> <button class="btn btn-success">Buy Now</button> <button class="btn btn-primary">Add to Card</button>  </div></div>
</div>
 @endforeach



</div>



@endsection