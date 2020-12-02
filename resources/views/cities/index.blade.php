@extends('layouts.app')

@section('content')

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cities->items() as $city)
    <tr>
    <td>{{$city->id}}</td>
    <td>{{$city->name}}</td>
    
    </tr>
@endforeach
 
