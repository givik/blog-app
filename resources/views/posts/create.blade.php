@extends('layout')

@section('content')
  <form method="post" action="/posts">
    {{ csrf_field() }}
    <input name="title" type="text" /><br>
    <textarea name="body"></textarea><br>
    <input type="submit" />
  </form>
@endsection
