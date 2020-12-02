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
  @foreach ($stores->items() as $store)
    <tr>
    <td>{{$store->id}}</td>
    <td>{{$store->name}}</td>
    <td>{{$store->oib}}</td>
    
    </tr>
@endforeach