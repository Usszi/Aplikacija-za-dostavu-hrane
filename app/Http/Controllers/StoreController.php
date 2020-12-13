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
}
