@extends('components.layout')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome, {{ session('username') }}</h1>
@endsection