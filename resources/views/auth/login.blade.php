@extends('layouts.app')

@section('content')

<h2>Admin Login</h2>

@if(session('error'))
    <div class="error">
        {{ session('error') }}
    </div>
@endif

<form method="POST" action="{{ route('login') }}">

    @csrf

    <input type="email"
           name="email"
           placeholder="Enter Email"
           required>

    <input type="password"
           name="password"
           placeholder="Enter Password"
           required>

    <button type="submit">
        Login
    </button>

</form>

@endsection