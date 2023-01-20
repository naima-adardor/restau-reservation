<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

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
    
    return redirect()->back();
  }
  else
  {
    return redirect('/login');
  }
} 
}
