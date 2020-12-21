<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::paginate();  
        return view('restaurants.index',compact('restaurants'));   
    }

  
    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants.show',compact('restaurant')); 
    }
    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants.edit', compact('restaurant'));
    }

    public function create()
    {
        return view('restaurants.create'); 
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'adress' => 'required|max:255',
            'oib' => 'required|max:255'
        ]);

        $restaurant = Restaurant::findOrFail($id);
        $restaurant->fill($validated);
        $restaurant->save();

        return view('restaurants.show', compact('restaurant'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:restaurants|max:255',
            'adress' => 'required|unique:restaurants|max:255',
            'oib' => 'required|unique:restaurants|max:255'
        ]);
        $restaurant = Restaurant::create($validated);
        return view('restaurants.show', compact('restaurant'));
    }
}
