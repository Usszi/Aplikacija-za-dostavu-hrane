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

}
