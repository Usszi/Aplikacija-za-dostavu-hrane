@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('messages.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- country name -->
        <div class="form-group">
            <label for="name">Message body</label>
            <input value="{{ @old('message_body') }}" name="message_body" type="text" class="form-control" id="message_body">
            @if ($errors->has('message_body'))
                <span class="text-danger">{{ $errors->first('message_body') }}</span>
            @endif
        </div>

        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('messages.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection