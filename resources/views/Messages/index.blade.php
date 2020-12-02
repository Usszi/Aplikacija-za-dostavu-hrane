@extends('layouts.app')

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Message body</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($messages->items() as $message)
    <tr>
    <td>{{$message->id}}</td>
    <td>{{$message->message_body}}</td>
    
    </tr>
@endforeach