@extends('layouts.app')

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">

  <thead >
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Email</th>
      <th scope="col">Adress</th>
      <th scope="col">Gender</th>
      <th scope="col">Date of birth</th>
      <th>Actions</th>
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
    <td>{{$user->date_of_birth}}</td>
    <td>
    <a class="btn btn-outline-primary" href="{{ route('users.show',['user' => $user->id]) }}">Details</a>
    <a class="btn btn-outline-primary" href="{{ route('users.edit',['user' => $user->id]) }}">Edit</a>
    </td>

    </tr>
@endforeach
</tbody>
</table>
@endsection