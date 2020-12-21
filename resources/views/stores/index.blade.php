@extends('layouts.app')

@section('content')
<a href="{{ route('stores.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">

  <thead >

    <tr>
    <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Adress</th>
      <th scope="col">Oib</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($stores->items() as $store)
    <tr>
    <td>{{$store->id}}</td>
    <td>{{$store->name}}</td>
    <td>{{$restaurant->adress}}</td>
    <td>{{$store->oib}}</td>
    <td>
    <a class="btn btn-outline-primary" href="{{ route('stores.show',['store' => $store->id]) }}">Details</a>
    <a class="btn btn-outline-primary" href="{{ route('stores.edit',['store' => $store->id]) }}">Edit</a>
    </td>
    
    </tr>
@endforeach
</tbody>
</table>
@endsection