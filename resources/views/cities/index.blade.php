@extends('layouts.app')

@section('content')
<a href="{{ route('cities.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">

  <thead >

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cities->items() as $city)
    <tr>
    <td>{{$city->id}}</td>
    <td>{{$city->name}}</td>
    <td>
    <a class="btn btn-outline-primary" href="{{ route('cities.show',['city' => $city->id]) }}">Details</a>
    <a class="btn btn-outline-primary" href="{{ route('cities.edit',['city' => $city->id]) }}">Edit</a>
    </td>
    
    </tr>
@endforeach
</tbody>
</table>
@endsection
 
