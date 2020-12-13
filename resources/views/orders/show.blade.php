@extends('layouts.app')

@section('content')
 <div>
 <h3 class="mt-3">Deliverer detail</h3>
 <ul class="list-unstyled">
 <li>Name: {{$order->name}}</li>
 <li>Quantity: {{$order->quantity}}}</li>

 </ul>
 <a href="{{ route('orders.index') }}"class="btn btn-outline-primary">Back</a>
 </div>
@endsection