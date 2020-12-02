@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($orders->items() as $order)
    <tr>
    <td>{{$order->id}}</td>
    <td>{{$order->name}}</td>
    <td>{{$order->quantity}}</td>
    
    </tr>
@endforeach