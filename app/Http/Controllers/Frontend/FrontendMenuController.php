<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class FrontendMenuController extends Controller
{
  public function index()
  {
    $menus=Menu::all();
    return view('menus.index',compact('menus'));
  }  

  public function addcart(Request $request ,$id)
  {
   if (Auth::id()) 
  {
    $user_id=Auth::id();
    //show id
    //dd($user_id);
    $menu_id=$id;
    $quantity=$request->quantity;
    $cart=new cart;
    $cart->user_id=$user_id;
    $cart->menu_id=$menu_id;
    $cart->quantity=$quantity;
    $cart->save();

    
    return redirect()->back();
  }
  else
  {
    return redirect('/login');
  }
} public function showcart()
  {
    $user_id=Auth::id();
    $carts=Cart::where('user_id',$user_id)->get();
    return view('menus.cart',compact('carts'));
  }
  public function removecart($id)
  {
    $cart=Cart::find($id);
    $cart->delete();
    return redirect()->back();
  }
  public function updatecart(Request $request,$id)
  {
    $cart=Cart::find($id);
    $cart->quantity=$request->quantity;
    $cart->save();
    return redirect()->back();
  }

}
