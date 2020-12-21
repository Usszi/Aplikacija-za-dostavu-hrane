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
        $user = User::pluck('name','surname','email','adress','gender','date_of_birth');
        $store = Store::pluck('name','adress','oib');
        $restaurant = Restaurant::pluck('name','adress','oib');
        $deliverer = Deliverer::pluck('name','surname','gender','date_of_birth');
        return view('orders.edit', compact('order','user','store','restaurant','deliverer'));
    }

    public function create()
    {
        return view('orders.create'); 
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|max:255',
            'user_id' =>'required',
            'store_id' =>'required',
            'restaurant_id' =>'required',
            'deliverer_id' =>'required'
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
