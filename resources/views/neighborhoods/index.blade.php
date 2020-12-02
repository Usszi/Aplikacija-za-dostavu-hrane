@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($neighborhoods->items() as $neighborhood)
    <tr>
    <td>{{$neighborhood->id}}</td>
    <td>{{$neighborhood->name}}</td>
    
    </tr>
@endforeach