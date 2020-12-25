<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function login(Request $request)
    {
    	  // $user = User::where(['email'=>$request->email,'password'=>Hash::check('INPUT PASSWORD',$request->password)])->first();
    	$user = User::where(['email'=>$request->email])->first();
    	// echo Hash::check($request->password,$user->password);
    	  if(!$user || !Hash::check($request->password,$user->password))
    	  {
    	  	return redirect('/login');
    	  }
    	  else
    	  {
    	  	$request->session()->put('user',$user);
    	  	return redirect('/product');
    	  }
    }
    function register(Request $request)
    {
        $user  = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $userId = $user->id;
        $user = User::where('id',$userId)->first();

        $request->session()->put('user',$user);
        return redirect('/product');
    }
}