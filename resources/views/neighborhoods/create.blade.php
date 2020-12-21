@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('neighborhoods.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- country name -->

        <div class="form-group">
            <label for="name">Neighborhood Name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="city-id">City id</label>
            <input value="{{ @old('city_id') }}" name="city_id" type="text" class="form-control" id="city-id">
            @if ($errors->has('city_id'))
                <span class="text-danger">{{ $errors->first('city_id') }}</span>
            @endif
        </div>

        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('neighborhoods.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection