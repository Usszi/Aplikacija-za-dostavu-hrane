@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('neighborhoods.update', ['neighborhood' => $neighborhood->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

       
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="city">City</label>
            {{ Form::select('city_id', $cities, $neighborhood->city_id, ['class' => 'form-control', 'id' => 'city']) }}
        </div>


        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('neighborhoods.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection