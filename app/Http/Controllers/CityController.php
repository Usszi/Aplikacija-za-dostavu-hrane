<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\City;

class CityController extends Controller
{
    
    public function index()
    {
        $cities = City::paginate();  
        return view('cities.index',compact('cities')); 
    }

    public function show($id)
    {
        $city = City::findOrFail($id);
        return view('cities.show',compact('city')); 
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }

    public function create()
    {
        return view('cities.create'); 
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255'
        ]);

        $city = City::findOrFail($id);
        $city->fill($validated);
        $city->save();

        return view('cities.show', compact('city'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:cities|max:255'
        ]);
        $city = City::create($validated);
        return view('cities.show', compact('city'));
    }


}
