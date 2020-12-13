@extends('layouts.app')

@section('content')
 <div>
 <h3 class="mt-3">Neighborhood detail</h3>
 <ul class="list-unstyled">
 <li>Name: {{ $neighborhood->name }}</li>
 
 </ul>
 <a href="{{ route('neighborhoods.index') }}"class="btn btn-outline-primary">Back</a>
 </div>
@endsection