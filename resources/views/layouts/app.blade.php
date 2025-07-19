<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    @section('head-title')
      {{ config('app.name', 'Laravel') }}
    @show
  </title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: lightgray;">
  @include('include.header')

  <div class="container mt-3 mb-3 pt-3">
    <a href="{{ url()->previous() }}" class="btn btn-secondary">
      Back
    </a>
    <a href="{{ url('/') }}" class="btn btn-secondary align-top">
      See all movies
    </a>
  </div>

  @yield('content')

  @include('include.footer')
</body>

</html>
