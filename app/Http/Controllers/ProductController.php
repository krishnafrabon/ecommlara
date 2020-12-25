<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index()
    {
    	$data =  Product::all();
    	return view('product',['products'=>$data]);
    }
    function productdetails($id)
    {
    	$data = Product::find($id);
    	return view('productdetails',['products'=>$data]);
    }
    function search(Request $request)
    {
    	  $data = Product::where('name','like','%'.$request->input('query').'%')->get();
    	return view('search',['products'=>$data]);
    }
    function addtocart(Request $request)
    {
    	if($request->session()->has('user'))
    	{
    		$cart = new Cart();
    		// print_r($request->session()->get('user')->id);
    		// exit;
    		$cart->user_id = $request->session()->get('user')->id;
    		$cart->product_id = $request->product_id;
    		$cart->save();
    		return redirect('/product');
    	}
    	else
    	{
    		return redirect('/login');
    	}
    }
    static function cartItem()
    {
    	$userId = Session::get('user')['id'];
    	return Cart::where('user_id',$userId)->count();
    }

    function cartlist()
    {  
		  $userId = Session::get('user')['id'];
	 
		$data =  DB::table('cart')
		->join('products','cart.product_id','products.id')
		->select('products.*','cart.id as cart_id')
		->where('cart.user_id',$userId)
		->get();
		return view('cartlist',['products'=>$data]);

    }
    function removecart(Request $request)
    {
    	$userId = Session::get('user')['id'];
    	$cart_id = $request->cart_id;
    	Cart::destroy($cart_id);
    	return redirect('/cartlist');
    }
    function ordernow()
    {
    	$userId = Session::get('user')['id'];

     	$data =  DB::table('cart')
		->join('products','cart.product_id','products.id')
 		->where('cart.user_id',$userId)
		->sum('products.price');
		return view('ordernow',['total'=>$data]);

    }
    function orderplace(Request $request)
    {
    	$userId = Session::get('user')['id'];
    	$allCart = Cart::where('user_id',$userId)->get();
    	foreach ($allCart as $key => $cart) {
    		$order = new Order;
    		$order->product_id = $cart->product_id;
    		$order->user_id = $cart->user_id;
    		$order->address = $request->address;
    		$order->payment_method = $request->payment;
    		$order->payment_status = 'pending';
    		$order->status = 'pending';
    		$order->save();
    	}
    	Cart::where('user_id',$userId)->delete();
    	return redirect('/product');
    }
    function orders()
    {
    	$userId = Session::get('user')['id'];
    	$orders =  DB::table('orders')
		->join('products','orders.product_id','products.id')
 		->where('orders.user_id',$userId)
		->get()->toarray();
		// print_r($data);
    	// $data = Order::where('user_id',$userId)->get()->toarray();
    	return view('orderlist',['orders'=>$orders]);
    }
    
}
