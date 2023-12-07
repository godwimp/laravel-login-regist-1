@extends('components.layout')

@section('title', 'Register')

@section('content')
    <h1>Register User</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            <br>
        </div>
        
        <button type="submit" class="btn btn-primary" id="liveAlertBtn">Register</button>
        <div class="liveAlertPlaceholder"></div>
        
    </form>
@endsection