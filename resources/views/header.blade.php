<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
$total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="{{url('/product')}}">Ecomm</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/product')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/orders')}}">Orders</a>
      </li>
    <!--   <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form method=" " action="{{url('/search')}}" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    	<a href="{{url('/cartlist')}}" class="nav-link">Cart({{$total}})</a>      
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link">SignUp</a>
    </li> -->
    @if(Session::has('user'))
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}}</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
      </div>
    </li>
    @else
    <li class="nav-item">
      <a href="{{url('/login')}}" class="nav-link">Login</a>
      <a href="{{url('/register')}}" class="nav-link">Register</a>
    </li>
    @endif
  </ul>
  </div>
</nav>