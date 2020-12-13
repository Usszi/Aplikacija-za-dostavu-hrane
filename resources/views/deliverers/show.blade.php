@extends('layouts.app')

@section('content')
 <div>
 <h3 class="mt-3">Deliverer detail</h3>
 <ul class="list-unstyled">
 <li>Name: {{ $deliverer->name }}</li>
 <li>Surname: {{ $deliverer->surname }}</li>
 <li>Gender: {{ $deliverer->gender }}</li>
 <li>Date of birth: {{ $deliverer->date_of_birth }}</li>
 </ul>
 <a href="{{ route('deliverers.index') }}"class="btn btn-outline-primary">Back</a>
 </div>
@endsection