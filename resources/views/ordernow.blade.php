
@extends('master')




@section('content')


<h2>Total price</h2>

<table class="table table-hover">
    
    <tbody>
      <tr>
        <th scope="row">price</th>
        <td>{{$totalprice}}</td>
        
      </tr>
      
      
    </tbody>
    
  </table>
  



  <form class="col-sm-6" method="post" action="/orderplace">
    @csrf
    <div class="form-group">
     <textarea class="form-control" name="address" placeholder="Address"></textarea>
     
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Method</label>
      <p><input type="radio" value="Online"  name="payment"> <span>Online</span></p>
      <p><input type="radio" value="UPI"  name="payment"> <span>UPI</span></p>
      <p><input type="radio" value="Cash"  name="payment"> <span>Cash</span></p>
   
   
   
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection