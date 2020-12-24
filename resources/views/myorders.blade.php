
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




 id Primary	bigint(20)		UNSIGNED	No	None		AUTO_INCREMENT	Change Change	Drop Drop	
More More
	2	product_id	int(11)			No	None			Change Change	Drop Drop	
More More
	3	user_id	int(11)			No	None			Change Change	Drop Drop	
More More
	4		varchar(255)	utf8mb4_unicode_ci		No	None			Change Change	Drop Drop	
More More
	5		varchar(255)	utf8mb4_unicode_ci		No	None			Change Change	Drop Drop	
More More
	6		varchar(255)	utf8mb4_unicode_ci		No	None			Change Change	Drop Drop	
More More
	7	payment_status



</div>



@endsection