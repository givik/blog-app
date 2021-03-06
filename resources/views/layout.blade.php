<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
</head>
<body>
  @if($flash = session('message'))
    <div class="alert"> {{ $flash }} </div>
  @endif
  @include('header')
  @yield('content')
  <div style="position:fixed; top:100px; right:50px;">
    @include('sidebar')
  </div>
</body>
</html>
