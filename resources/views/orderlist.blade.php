@extends('master')
@section('content')
<div class="container-fluid custom-product">
 <div class="row">
 <div class="col-sm-8">
<div class="trending-wrapper">
	<h2>Orders List</h2>
	<!-- <a href="{{url('/ordernow')}}">Order Now</a> -->
	<div class="carousel-inner">
   	@foreach($orders as $key=>$p)
    <div class="row  cart-list-devider">
    	<div class="col-sm-3">
    		<img class="trending-img" src="{{asset('public/images/products/'.'/'.$p->gallery)}}"   >
    	</div>
    	<div class="col-sm-3">
    		 <h3>{{$p->name}}</h3>
    		 <h5>Delivery Status : {{$p->status}}</h5>
    		  <h5>Payment Status : {{$p->payment_status}}</h5>
    		  <h5>Payment Method : {{$p->payment_method}}</h5>
    		  <h5>Delivery Address : {{$p->address}}</h5>
    	</div>
    	<div class="col-sm-3">
    		 
    		
    	</div>
    </div>
     @endforeach
  </div>
</div>
</div>
</div>
</div>
@endsection