@extends('layouts.auth')

@section('content')

<h2>Register</h2>


<form method="POST" action="{{ route('auth.register.post') }}">
    @csrf
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <label>Confirm Password:</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Register</button>
</form>

@endsection
