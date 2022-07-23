<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{

    public function add (Request $request){

        $order = new Order;
        $order->amount = $request->amount;
        $order->animal_id = $request->animal_id;
        $order->user_id = Auth::user()->id;
        $order->save();
    }
}