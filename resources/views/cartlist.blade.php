@extends('master')
@section('content')
<div class="container-fluid custom-product">
 <div class="row">
 <div class="col-sm-8">
<div class="trending-wrapper">
	<h2>Cart List</h2>
	<div class="carousel-inner">
   	@foreach($products as $key=>$p)
    <div class="row  cart-list-devider">
    	<div class="col-sm-3">
    		<img class="trending-img" src="{{asset('public/images/products/'.'/'.$p->gallery)}}"   >
    	</div>
    	<div class="col-sm-3">
    		 <h3><a href="{{url('productdetails'.'/'.$p->id)}}">{{$p->name}}</a></h3>
    		 <h5><a href="{{url('productdetails'.'/'.$p->id)}}">{{$p->description}}</a></h5>
    	</div>
    	<div class="col-sm-3">
    		<form method="POST" action="{{url('/removecart')}}">
    			@csrf
    			<input type="hidden" name="cart_id" value="{{$p->cart_id}}">
    			<button type="submit" class="btn btn-warning">Remove From Cart</button>	
    		</form>
    		
    	</div>
    </div>
     @endforeach
  </div>
</div>
</div>
</div>
</div>
@endsection