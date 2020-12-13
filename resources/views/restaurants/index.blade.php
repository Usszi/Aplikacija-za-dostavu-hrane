@extends('layouts.app')

@section('content')
<a href="{{ route('restaurants.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">

  <thead >

    <tr>
    <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Oib</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($restaurants->items() as $restaurant)
    <tr>
    <td>{{$restaurant->id}}</td>
    <td>{{$restaurant->name}}</td>
    <td>{{$restaurant->oib}}</td>
    <td>
    <a class="btn btn-outline-primary" href="{{ route('restaurants.show',['restaurant' => $restaurant->id]) }}">Details</a>
    <a class="btn btn-outline-primary" href="{{ route('restaurants.edit',['restaurant' => $restaurant->id]) }}">Edit</a>
    </td>
    
    </tr>
@endforeach
</tbody>
</table>
@endsection