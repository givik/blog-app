<div class="errors">
  @if(count($errors))
    @foreach($errors->all() as $error)
      {{ $error }}
    @endforeach
  @endif
</div>
