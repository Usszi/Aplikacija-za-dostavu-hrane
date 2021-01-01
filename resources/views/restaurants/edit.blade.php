@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('restaurants.update', ['restaurant' => $restaurant->id]) }}" method="POST">

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
            <label for="name">Adress</label>
            <input value="{{ @old('adress') }}" name="adress" type="text" class="form-control" id="adress">
            @if ($errors->has('adress'))
                <span class="text-danger">{{ $errors->first('adress') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Oib</label>
            <input value="{{ @old('oib') }}" name="oib" type="text" class="form-control" id="oib">
            @if ($errors->has('oib'))
                <span class="text-danger">{{ $errors->first('oib') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="neighborhood">Neighborhood</label>
            {{ Form::select('neighborhood_id', $neighborhoods, $restaurant->neighborhood_id, ['class' => 'form-control', 'id' => 'neighborhood']) }}
        </div>


        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('restaurants.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection