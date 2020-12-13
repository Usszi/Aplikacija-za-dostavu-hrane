@extends('layouts.app')

@section('content')
<a href="{{ route('neighborhoods.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">

  <thead >

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($neighborhoods->items() as $neighborhood)
    <tr>
    <td>{{$neighborhood->id}}</td>
    <td>{{$neighborhood->name}}</td>
    <td>
    <a class="btn btn-outline-primary" href="{{ route('neighborhoods.show',['neighborhood' => $neighborhood->id]) }}">Details</a>
    <a class="btn btn-outline-primary" href="{{ route('neighborhoods.edit',['neighborhood' => $neighborhood->id]) }}">Edit</a>
    </td>
    
    </tr>
@endforeach
</tbody>
</table>
@endsection