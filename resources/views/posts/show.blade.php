@extends('layout')

@section('content')

<h1>{{ $post->title }}</h1>
<p>@if(isset($post->user->name)){{ $post->user->name }}@endif</p>
<p>{{ $post->body }}</p>

  @if(count($post->tags))
    <ul>
      @foreach($post->tags as $tag)
        <li> <a href='/posts/tags/{{ $tag->name }}'>{{ $tag->name }}</a> </li>
      @endforeach
    </ul>
  @endif

  <div class="comments">
    @foreach ($post->comments as $comment)
      <hr />
      <strong>{{ $comment->created_at->diffForHumans() }}</strong> {{ $comment->body }}
    @endforeach

    <div class="form">
      <form action='/posts/{{ $post->id }}/comments' method="post">
        {{ csrf_field() }}
        <textarea type="text" name="body" ></textarea>
        <br>
        <input type="submit" name="Add Comment" />
      </form>
    </div>
  </div>
  @include('errors')

@endsection
