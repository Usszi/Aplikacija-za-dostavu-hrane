@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('orders.update', ['order' => $order->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- country name -->
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Quantity</label>
            <input value="{{ @old('quantity') }}" name="quantity" type="text" class="form-control" id="quantity">
            @if ($errors->has('quantity'))
                <span class="text-danger">{{ $errors->first('quantity') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('orders.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection