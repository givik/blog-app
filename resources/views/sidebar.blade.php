@foreach($archives as $stats)
  <br><a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">{{ $stats['month'] .' '. $stats['year'] }}</a>  
@endforeach
