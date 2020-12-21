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
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    public function create()
    {
        return view('orders.create'); 
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|max:255'
        ]);

        $order = Order::findOrFail($id);
        $order->fill($validated);
        $order->save();

        return view('orders.show', compact('order'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:orders|max:255',
            'quantity' => 'required|unique:orders|max:255'
        ]);
        $order = Order::create($validated);
        return view('orders.show', compact('order'));
    }
}
