
@extends('master')




@section('content')



<div class="container custom-product bg-gary">   
<div class="owl-carousel owl-theme">    
@foreach($products as $product )


<div class="card"> <div class="item"> <a href="detail\{{$product->id}}"><div class="card-header"><img height="200px" width="auto" src="{{$product->gallery}}"/></div></a> <div ><h5 class="text-center">Rs.{{$product['price']}}</h5></div> <div class="px-4 py-1 row"> <button class="btn btn-success col">Buy Now</button>
     <form method="POST" action="/addtocart">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <button class="btn btn-primary col">Add to Card</button> 

    </form>
</div></div>
</div>
 @endforeach
</div>


</div>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
  
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>

@endsection