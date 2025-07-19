@extends('layouts.app')

@isset ($headtitle)
  @section('head-title')
    @parent | {{ $headtitle }}
  @endsection
@endisset

@section('content')
  <div class="container mt-3 mb-3 p-3" style="background-color: white;">
    <div class="row">
      <div class="col-lg-3 mt-3 mb-3 text-center">
        <img class="img-fluid" src="{{ asset('posters/'.$data->photo) }}">
      </div>

      <div class="col-lg-5 mt-3 mb-3">
        <div class="h1 mb-3">
          {{ $data->title }}
        </div>
        <div class="h3 text-center mb-3">
          @for ($i = 1; $i <= 10; $i++)
            @if ($i <= $data->rating)
              <span class="fa fa-star" style="color: orange;"></span>
            @else
              <span class="fa fa-star"></span>
            @endif
          @endfor
        </div>
        <div class="mb-3">
          {{ $data->description }}
        </div>
        <div>
          Category:
          <a href="{{ url('/genre/'.$data->genre->id) }}">
            {{ $data->genre->name }}
          </a>
        </div>
      </div>

      <div class="col-lg-4 mt-3 mb-3">
        <div class="h2">Episodes</div>

        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Episode</th>
              <th scope="col">Title</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($episodes as $episode)
              <tr>
                <td>Episode {{ $episode->episode }}</th>
                <td>{{ $episode->title }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <div class="d-flex justify-content-center">
          {{ $episodes->links() }}
        </div>
      </div>
    </div>
  </div>
@endsection
