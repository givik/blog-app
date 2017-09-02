@foreach($archives as $stats)
  <br><a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">{{ $stats['month'] .' '. $stats['year'] }}</a>
@endforeach

<br><br><br>
@foreach($tags as $tag)
  <br><a href="/posts/tags/{{ $tag }}">{{ $tag }}</a>
@endforeach
