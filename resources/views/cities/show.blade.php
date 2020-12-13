@extends('layouts.app')

@section('content')
 <div>
 <h3 class="mt-3">City detail</h3>
 <ul class="list-unstyled">
 <li>Name: {{ $city->name }}</li>
 <li><a href="https://en.wikipedia.org/w/index.php?search={{ $city->name }}">Wikipedia link </a> </li>
 </ul>
 <a href="{{ route('cities.index') }}"class="btn btn-outline-primary">Back</a>
 </div>
@endsection
 
