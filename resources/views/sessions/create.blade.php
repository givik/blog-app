@extends('layout')

@section('content')
  <h2>Sign In</h2>

  <form method="post" action="/login">
    {{ csrf_field() }}
    Email:<input type="email" name="email" />
    <br>
    Password:<input type="password" name="password" />
    <br>
    <input type="submit" name="Sign In" />
    @include('errors')
  </form>
@endsection
