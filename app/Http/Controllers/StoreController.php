<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::paginate();  
        return view('stores.index',compact('stores'));   
    }

  
    public function show($id)
    {
        $store = Store::findOrFail($id);
        return view('stores.show',compact('store')); 
    }
    public function edit($id)
    {
        $store = Store::findOrFail($id);
        return view('stores.edit', compact('store'));
    }

    public function create()
    {
        return view('stores.create'); 
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'adress' => 'required|max:255',
            'oib' => 'required|max:255',
            'neighborhood_id' =>'required'
        ]);

        $store = Store::findOrFail($id);
        $store->fill($validated);
        $store->save();

        return view('stores.show', compact('store'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:stores|max:255',
            'adress' => 'required|unique:restaurants|max:255',
            'oib' => 'required|unique:stores|max:255',
            'neighborhoor_id' => 'required'
        ]);
        $store = Store::create($validated);
        return view('stores.show', compact('store'));
    }

}
