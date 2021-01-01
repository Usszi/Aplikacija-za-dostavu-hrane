<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Neighborhood;

class NeighborhoodController extends Controller
{
    public function index()
    {
        $neighborhoods = Neighborhood::paginate();  
        return view('neighborhoods.index',compact('neighborhoods'));   
    }

    public function show($id)
    {
        $neighborhood = Neighborhood::findOrFail($id);
        return view('neighborhoods.show',compact('neighborhood')); 
    }
    public function edit($id)
    {
        $neighborhood = Neighborhood::findOrFail($id);
        $cities = City::pluck('name');
        return view('neighborhoods.edit', compact('neighborhood','cities'));
    }

    public function create()
    {
        return view('neighborhoods.create'); 
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'city_id' => 'required'
        ]);

        $neighborhood = Neighborhood::findOrFail($id);
        $neighborhood->fill($validated);
        $neighborhood->save();

        return view('neighborhoods.show', compact('neighborhood'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:cities|max:255',
            'city_id'=> 'required'

        ]);
        $neighborhood = Neighborhood::create($validated);
        return view('neighborhoods.show', compact('neighborhood'));
    }

}
