@extends('layouts.app')

@section('content')
 <div>
 <h3 class="mt-3">Message detail</h3>
 <ul class="list-unstyled">
 <li>Message body: {{ $message->message_body }}</li>

 </ul>
 <a href="{{ route('messages.index') }}"class="btn btn-outline-primary">Back</a>
 </div>
@endsection