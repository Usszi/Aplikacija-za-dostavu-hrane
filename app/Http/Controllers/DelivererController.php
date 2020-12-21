<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliverer;

class DelivererController extends Controller
{
    
    public function index()
    {
        $deliverers = Deliverer::paginate();  
        return view('deliverers.index',compact('deliverers'));   
    }

  
    public function show($id)
    {
        $deliverer = Deliverer::findOrFail($id);
        return view('deliverers.show',compact('deliverer')); 
    }
    public function edit($id)
    {
        $deliverer = Deliverer::findOrFail($id);
        return view('deliverers.edit', compact('deliverer'));
    }

    public function create()
    {
        return view('deliverers.create'); 
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'gender' => 'required|max:255',
            'date_of_birth' => 'required|max:255'
        ]);

        $deliverer = Deliverer::findOrFail($id);
        $deliverer->fill($validated);
        $deliverer->save();

        return view('deliverers.show', compact('deliverer'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:deliverers|max:255',
            'surname' => 'required|unique:deliverers|max:255',
            'gender' => 'required|unique:deliverers|max:255',
            'date_of_birth' => 'required|unique:deliverers|max:255'
        ]);
        $deliverer = Deliverer::create($validated);
        return view('deliverers.show', compact('deliverer'));
    }


}
