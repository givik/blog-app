@extends('layout')

@section('content')
  <h1>Register</h1>
  <form method="post" action="/register">
    {{ csrf_field() }}
    Name: <input type="text" name="name" />
    <br>
    Email: <input type="email" name="email" />
    <br>
    Password: <input type="password" name="password" />
    <br>
    Confirmation: <input type="password" name="password_confirmation" />
    <br>
    <input type="submit" name="Register" />
    @include('errors')
  </form>
@endsection
