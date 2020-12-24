@extends('master')

@section('content')
<div class="container-fluid custom-product">
	 
 <div class="row">
	 	<div class="col-sm-3">
 	<a>Filter</a>
 </div>
 <div class="col-sm-8">
<div class="trending-wrapper">
	<h2>Result For Products</h2>
	<div class="carousel-inner">
   	@foreach($products as $key=>$p)
    <div class="trending-items">
      <img class="trending-img" src="{{asset('public/images/products/'.'/'.$p->gallery)}}"   >
      <div class="">
        <h3><a href="{{url('productdetails'.'/'.$p->id)}}">{{$p->name}}</a></h3>
        
      </div>   
    </div>
     @endforeach
  </div>
</div>
</div>
</div>

	 
</div>
@endsection