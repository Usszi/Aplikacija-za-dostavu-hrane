@extends('layouts.app')

@section('content')
<a href="{{ route('deliverers.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">

  <thead >

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Gender</th>
      <th scope="col">Date_of_birth</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($deliverers->items() as $deliverer)
    <tr>
    <td>{{$deliverer->id}}</td>
    <td>{{$deliverer->name}}</td>
    <td>{{$deliverer->surname}}</td>
    <td>{{$deliverer->gender}}</td>
    <td>{{$deliverer->date_of_birth}}</td>
    <td>
    <a class="btn btn-outline-primary" href="{{ route('deliverers.show',['deliverer' => $deliverer->id]) }}">Details</a>
    <a class="btn btn-outline-primary" href="{{ route('deliverers.edit',['deliverer' => $deliverer->id]) }}">Edit</a>
    </td>
    
    </tr>
@endforeach
</tbody>
</table>
@endsection
 
