@extends('layouts.app')

@section('content')
<a href="{{ route('cities.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">

  <thead >

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Message body</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($messages->items() as $message)
    <tr>
    <td>{{$message->id}}</td>
    <td>{{$message->message_body}}</td>
    <td>
    <a class="btn btn-outline-primary" href="{{ route('messages.show',['message' => $message->id]) }}">Details</a>
    <a class="btn btn-outline-primary" href="{{ route('messages.edit',['message' => $message->id]) }}">Edit</a>
    </td>
    
    </tr>
@endforeach
</tbody>
</table>
@endsection