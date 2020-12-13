<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate();  
        return view('orders.index',compact('orders'));   
    }

  
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show',compact('order')); 
    }
}
