@extends('master')

@section('content')
<div class="container-fluid custom-product">
	 
		 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
  	@foreach($products as $key=>$p)
    <li data-target="#myCarousel" data-slide-to="{{$key}}" {{$key == 0 ?'selected':''}} class="active"></li>
    @endforeach
     
  </ul>
  <div class="carousel-inner">
  	@foreach($products as $key=>$p)
    <div class="carousel-item  {{$key == 0 ?'active':''}}">
      <img class="slider-img" src="{{asset('public/images/products/'.'/'.$p->gallery)}}" alt="Los Angeles" width="100%" height="500">
      <div class="carousel-caption">
        <h3>{{$p->name}}</h3>
        <p>{{$p->description}}</p>
      </div>   
    </div>
     @endforeach
  </div>
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div class="trending-wrapper">
	<h1>Trending Products
	<div class="carousel-inner">
  	@foreach($products as $key=>$p)
    <div class="trending-items">
      <img class="trending-img" src="{{asset('public/images/products/'.'/'.$p->gallery)}}"   >
      <div class="">
        <h3>{{$p->name}}</h3>
        
      </div>   
    </div>
     @endforeach
  </div>
</div>

	 
</div>
@endsection