@extends('layouts.auth-master')

@section('content')
    <form action="/register" method="POST">
        @csrf 
        <input type = "text" name="username"> 
        <input type = "email" name="email">
        <input type = "password" name="password">
        <input type = "password" name="password_confirmation">
        <input type="submit" value="Registrarse">
    </form>
@endsection