@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- country name -->
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ $user->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Surname</label>
            <input value="{{ $user->surname }}" name="surname" type="text" class="form-control" id="surname">
            @if ($errors->has('surname'))
                <span class="text-danger">{{ $errors->first('surname') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input value="{{ $user->email }}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Adress</label>
            <input value="{{ $user->adress }}" name="adress" type="text" class="form-control" id="adress">
            @if ($errors->has('adress'))
                <span class="text-danger">{{ $errors->first('adress') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Gender</label>
            <input value="{{ $user->gender }}" name="gender" type="text" class="form-control" id="gender">
            @if ($errors->has('gender'))
                <span class="text-danger">{{ $errors->first('gender') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Date of birth</label>
            <input value="{{ $user->date_of_birth }}" name="date_of_birth" type="text" class="form-control" id="date_of_birth">
            @if ($errors->has('date_of_birth'))
                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('users.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection