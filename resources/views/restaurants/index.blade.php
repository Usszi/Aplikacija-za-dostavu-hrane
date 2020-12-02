@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Oib</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($restaurants->items() as $restaurant)
    <tr>
    <td>{{$restaurant->id}}</td>
    <td>{{$restaurant->name}}</td>
    <td>{{$restaurant->oib}}</td>
    
    </tr>
@endforeach