@extends('layouts.auth')

@section('content')

<h2>Login</h2>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>

@endsection
