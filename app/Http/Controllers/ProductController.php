<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;

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
}
