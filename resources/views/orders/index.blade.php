@extends('layouts.app')

@section('content')
<a href="{{ route('orders.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">

  <thead >

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($orders->items() as $order)
    <tr>
    <td>{{$order->id}}</td>
    <td>{{$order->name}}</td>
    <td>{{$order->quantity}}</td>
    <td>
    <a class="btn btn-outline-primary" href="{{ route('orders.show',['order' => $order->id]) }}">Details</a>
    <a class="btn btn-outline-primary" href="{{ route('orders.edit',['order' => $order->id]) }}">Edit</a>
    </td>
    
    </tr>
@endforeach
</tbody>
</table>
@endsection
 