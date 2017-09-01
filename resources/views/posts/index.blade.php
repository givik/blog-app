@extends('layout')


@section('content')

  @foreach($posts as $post)
    <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
    <p>
      {{ $post->body }}
    </p>
    <h5>{{ $post->created_at->toFormattedDateString() }}</h5>
  @endforeach

@endsection
