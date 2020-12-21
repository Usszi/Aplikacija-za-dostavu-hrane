@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('orders.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

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

        <div class="form-group">
            <label for="user-id">User id</label>
            <input value="{{ @old('user_id') }}" name="user_id" type="text" class="form-control" id="user-id">
            @if ($errors->has('user_id'))
                <span class="text-danger">{{ $errors->first('user_id') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="restaurant-id">Restaurant id</label>
            <input value="{{ @old('restaurant_id') }}" name="restaurant_id" type="text" class="form-control" id="restaurant-id-id">
            @if ($errors->has('restaurant_id'))
                <span class="text-danger">{{ $errors->first('restaurant_id') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="store-id">Store id</label>
            <input value="{{ @old('store_id') }}" name="store_id" type="text" class="form-control" id="store-id">
            @if ($errors->has('store_id'))
                <span class="text-danger">{{ $errors->first('store_id') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="deliverer-id">Deliverer id</label>
            <input value="{{ @old('deliverer_id') }}" name="deliverer_id" type="text" class="form-control" id="deliverer-id">
            @if ($errors->has('deliverer_id'))
                <span class="text-danger">{{ $errors->first('deliverer_id') }}</span>
            @endif
        </div>





        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('orders.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection