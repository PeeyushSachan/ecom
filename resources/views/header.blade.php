<?php

use App\Http\Controllers\Procon;
 $totalc=Procon::cartitem();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorders">MyOrders</a>
      </li>
      
    @if(Session::has('user'))
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">logout</a>
          
        </div>
      </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="/">Login</a>
    </li>
@endif
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/search" method="GET">
      @csrf
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="psearch">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      
    <span class="navbar-text">
      <a class="nav-link" href="/cartlist">Cart({{$totalc}})</a>
    </span>
  </div>
</nav>