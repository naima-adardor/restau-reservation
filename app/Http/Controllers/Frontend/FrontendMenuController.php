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
} public function showcart(Request $request,$id)
  {
    $count=cart::where('user_id',$id)->count();
    //get the id of the cart table
    $data2=cart::select('*')->where('user_id',$id)->get();
    $data=Cart::where('user_id',$id)->join('menus','carts.menu_id','=','menus.id')->get();
    return view('showcart',compact('count','data','data2'));
  }
  public function remove($id)
  {
    $cart=cart::find($id);
    $cart->delete();
    return redirect()->back();
  }

}
