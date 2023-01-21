<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class WelcomeController extends Controller
{
    
    function index()
    {
        $specials=Category::where('name','specials')->first();
        $user_id=Auth::id();
        $count=cart::where('user_id',$user_id)->count();
        return view('welcome',compact('specials','user_id','count'));
    }
    public function thankyou()
    {
        # code...
        return view('thankyou');
    }
    public function about()
    {
        # code...
        return view('about');
    }
}
