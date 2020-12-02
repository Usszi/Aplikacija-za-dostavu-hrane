@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Email</th>
      <th scope="col">Adress</th>
      <th scope="col">Gender</th>
      <th scope="col">Date of birth</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users->items() as $user)
    <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->surname}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->adress}}</td>
    <td>{{$user->gender}}</td>
    >td>{{$user->date_of_birth}}</td>
    </tr>
@endforeach