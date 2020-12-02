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
        dd($neighborhood);
    }
}
