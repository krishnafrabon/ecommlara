@extends('master')
@section('content')
<div class="container-fluid custom-product">
  <div class="col-sm-8">
 <table class="table table-bordered table-sm">
     
    <tbody>
      <tr>
        <td>Price</td>
        <td>{{$total}}</td>
       </tr>
      <tr>
        <td>Tax</td>
        <td>0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>100</td>        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total + 100}}</td>
       </tr>
    </tbody>
  </table>
   <form action="{{url('/orderplace')}}" method="POST">
   	@csrf
  <div class="form-group">
     <textarea name="address"  class="form-control" placeholder="Enter Address"  >
     </textarea>
  </div>
  <div class="form-group">
  	<label>Payment</label>
     <p><input type="radio"  value="Online Payment" name="payment" > Online Payment </p>
      <p><input type="radio"  value="EMI Payment"  name="payment" > EMI Payment </p>
       <p><input type="radio"  value="Cash On Payment"  name="payment" > Cash On Payment </p>
  </div>
   
  <button type="submit" class="btn btn-primary">Order Now</button>
</form> 
</div>
</div>
@endsection