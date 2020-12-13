@extends('layouts.app')

@section('content')
 <div>
 <h3 class="mt-3">Restaurant detail</h3>
 <ul class="list-unstyled">
 <li>Name: {{$restaurant->name}}</li>
 <li>OIB: {{$restaurant->oib}}}</li>

 </ul>
 <a href="{{ route('restaurants.index') }}"class="btn btn-outline-primary">Back</a>
 </div>
@endsection