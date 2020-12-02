@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Gender</th>
      <th scope="col">Date_of_birth</th>
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
    
    </tr>
@endforeach
 
