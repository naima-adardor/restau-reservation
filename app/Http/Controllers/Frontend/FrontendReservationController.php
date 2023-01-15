<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FrontendReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation=$request->session()->get('reservation');
        $min_date=Carbon::today();
        $max_date=Carbon::now()->addWeek();
        return view('reservations.step-one',compact('min_date','reservation','max_date'));
    }  
}
