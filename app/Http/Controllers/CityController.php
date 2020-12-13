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

}
