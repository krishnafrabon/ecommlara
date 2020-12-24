@extends('master')

@section('content')
<div class="  custom-productdetails">
	 <div class="row">
	 	<div class="col-sm-6">
	 		<img class="detail-img" src="{{asset('/public/images/products/'.$products->gallery)}}" width="600px" />
	 	</div>
	 	<div class="col-sm-6 ml-10">
	 			<a href="{{url('/product')}}">Go Back</a>
	 			<h2>Name: {{$products->name}}</h2>
	 			<h3>Price: {{$products->price}}</h3>
	 			<h4>Description:<br>{{$products->description}}</h4>
	 			<h4>Category: {{$products->category}}</h4>
	 			
	 			<br><br>
	 			<form method="post" action="{{url('/addtocart')}}">
	 				@csrf
	 				<input type="hidden" value="{{$products->id}}" name="product_id">
	 			<button class="btn btn-success" type="submit">Add Cart</button>	
	 			</form>
	 			
	 			<br><br>
	 			<button   class="btn btn-primary">Buy Now</button>
	 	</div>
	 </div>

	 

	 
</div>
@endsection