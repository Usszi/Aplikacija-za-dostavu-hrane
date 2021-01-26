@extends('layouts.app')

@section('content')
 <div>
 <h3 class="mt-3">Store detail</h3>
 <ul class="list-unstyled">
 <li>Name: {{$store->name}}</li>
 <li>OIB: {{$store->oib}}}</li>

 </ul>
 <a href="{{ route('stores.index') }}"class="btn btn-outline-primary">Back</a>
 <button type="submit" class="btn btn-danger">Delete</button>
 <button type="submit" onclick="confirm('Are you sure?')" class="btn btn-danger">Delete</button>
 </div>
@endsection