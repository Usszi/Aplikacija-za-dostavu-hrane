@extends('layouts.app')

@section('content')
 <div>
 <h3 class="mt-3">User detail</h3>
 <ul class="list-unstyled">
 <li>Name: {{ $user->name }}</li>
 <li>Surname: {{ $user->surname }}</li>
 <li>Email: {{ $user->email }}</li>
 <li>Adress: {{ $user->adress }}</li>
 <li>Gender: {{ $user->gender }}</li>
 <li>Date of birth: {{ $user->date_of_birth }}</li>
 </ul>
 <a href="{{ route('user.index') }}"class="btn btn-outline-primary">Back</a>
 </div>
@endsection