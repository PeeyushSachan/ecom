@extends('master')




@section('content')




<div class="container">
<div class="card">
    <div class="row">
        <div class="col-auto col-sm-12 col-md-6">
            
            <img  src="{{$details->gallery}}" class="img-fluid">
        
        </div>
        <div class="col-auto col-sm-12 col-md-6 text-muted">
            <h2 class="text-center">{{$details->name}}</h2>
            <hr>
            <div class="row" >

                <div class="col-3 text-bold text-warning">Price</div>
                <div class="col">{{$details->price}}</div>


            </div>

           

            <div class="row" >

                <div class="col-3 text-bold text-info">cate.</div>
                <div class="col">{{$details->category}}</div>


            </div>

            <div class="row" >

                <div class="col-3 text-bold text-info">desc.</div>
                <div class="col">{{$details->description}} Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</div>


            </div>

            <div class="row" >

                <div class="col"><form method="POST" action="/addtocart">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$details->id}}">
                    <button type="submit" class="col btn btn-warning">Add to Cart</button>
                </form></div>
                <div class="col d-flex justify-content-center"> <a href="#" class="btn m-0 p-0 border border-success circle" ><img src="\svg\buy.svg" height="80px" ></a></div>


            </div>
        </div>


    </div>

</div>

</div>
@endsection