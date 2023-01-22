<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders=Order::all();
        
        return view('admin.orders.index',compact('orders'));
    }
    public function search(Request $request)
    {
        $search=$request->search;
        $orders=Order::where('name','Like','%'.$search.'%')
        ->orwhere('foodname','Like','%'.$search.'%')
        ->get();
         return view('admin.orders.index',compact('orders'));
    }

}
