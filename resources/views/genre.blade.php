@extends('layouts.app')

@isset ($headtitle)
  @section('head-title')
    @parent | {{ $headtitle }}
  @endsection
@endisset

@section('content')
  <div class="container mt-3 mb-3 pt-3" style="background-color: white;">
    <div class="container">
      <span class="h1">
        {{ $data->name }}
      </span>
    </div>

    <div class="container mt-3">
      <div class="row row-cols-1 row-cols-md-5">
        @foreach ($data->movies as $movie)
          @include('include.moviecard', [ 'data' => $movie ])
        @endforeach
      </div>
    </div>
  </div>
@endsection
